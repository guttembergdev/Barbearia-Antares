





//agendamento modal
        const temAgendamento = true;
        const agendamento = {
            data: "2025-09-25",
            hora: "14:30",
            valor: "00,00",
            profissional: "João da Silva"
        };

        document.querySelector('[data-bs-target="#agendamentoModal"]').addEventListener('click', function () {
            const infoContainer = document.getElementById('agendamento-info');

            if (temAgendamento) {
                const dataFormatada = agendamento.data.replace(/-/g, '/');
                infoContainer.innerHTML = `
                                                                                                                        <p><strong>📅 Data:</strong> ${dataFormatada}</p>
                                                                                                                        <p><strong>⏰ Horário:</strong> ${agendamento.hora}</p>
                                                                                                                        <p><strong>💰 Valor:</strong> R$ ${agendamento.valor}</p>
                                                                                                                        <p><strong>👤 Profissional:</strong> ${agendamento.profissional}</p>
                                                                                                                    `;
            } else {
                infoContainer.innerHTML = `<p>Nenhum agendamento encontrado.</p>`;
            }
        });

        const botaoAgende = document.querySelector('.btn-agende-agora');

        // Quando QUALQUER modal abrir → esconde o botão
        document.addEventListener('show.bs.modal', () => {
            botaoAgende.classList.add('hidden');
        });

        // Quando QUALQUER modal fechar → mostra o botão de novo
        document.addEventListener('hidden.bs.modal', () => {
            botaoAgende.classList.remove('hidden');
        });

        const btnIdioma = document.getElementById('btnIdioma');
        const idiomaItems = document.querySelectorAll('#idiomaModal .idioma-item');

        idiomaItems.forEach(item => {
            item.addEventListener('click', () => {
                const flag = item.getAttribute('data-flag');
                const sigla = item.getAttribute('data-sigla');

                // Atualiza o botão com a bandeira + sigla
                btnIdioma.textContent = `${flag} ${sigla}`;

                // Fecha o modal
                const modal = bootstrap.Modal.getInstance(document.getElementById('idiomaModal'));
                modal.hide();
            });
        });



// Máscara para o campo de telefone
document.getElementById("formCadastro").addEventListener("submit", function (e) {
    e.preventDefault(); // impede envio automático

    const nome = document.getElementById("nome").value.trim();
    const email = document.getElementById("email").value.trim();
    const telefone = document.getElementById("telefone").value.replace(/\D/g, "");
    const senha = document.getElementById("senhaCadastro").value;
    const confirmar = document.getElementById("confirmarSenha").value;

    if (nome === "" || email === "" || telefone === "" || senha === "" || confirmar === "") {
        alert("Preencha todos os campos.");
        return;
    }

    if (!email.includes("@")) {
        alert("Digite um e-mail válido.");
        return;
    }

    if (telefone.length < 10 || telefone.length > 11) {
        alert("Digite um telefone válido com DDD.");
        return;
    }

    if (senha !== confirmar) {
        alert("As senhas não coincidem.");
        return;
    }

    alert("Cadastro validado com sucesso!");
    // Aqui você pode enviar os dados pro backend quando estiver pronto
});





// Login com Google
    document.getElementById("btnGoogleLogin").addEventListener("click", function () {
        window.location.href = "/Conta/LoginGoogle";
    });
const btnGoogle = document.getElementById("btnGoogleLogin");
if (btnGoogle) {
    btnGoogle.addEventListener("click", function () {
        window.location.href = "/Conta/LoginGoogle";
    });
}








// Verifica se o usuário está logado (simulação)
if (usuarioLogado === "true") {
    // Libera funções
    document.querySelectorAll(".funcao-restrita").forEach(btn => {
        btn.disabled = false;
        btn.classList.remove("bloqueado");
    });
} else {
    // Bloqueia e mostra alerta
    document.querySelectorAll(".funcao-restrita").forEach(btn => {
        btn.addEventListener("click", function () {
            alert("Você precisa estar logado para usar essa função.");
        });
    });
}



document.querySelector("#btnAgendar").addEventListener("click", () => {
    if (usuarioLogado === "true") {
        fetch("/Conta/ConfirmarAgendamento")
            .then(res => res.text())
            .then(msg => alert(msg));
    } else {
        alert("Você precisa estar logado para confirmar agendamento.");
    }
});

const funcoesRestritas = [
    { seletor: ".btn-curtir", nome: "curtir" },
    { seletor: ".btn-agendar", nome: "confirmar agendamento" },
    { seletor: ".btn-favoritar", nome: "favoritar" }
];

funcoesRestritas.forEach(funcao => {
    const elementos = document.querySelectorAll(funcao.seletor);
    elementos.forEach(el => {
        if (usuarioLogado !== "true") {
            el.addEventListener("click", () => {
                alert(`Você precisa estar logado para ${funcao.nome}.`);
            });
            el.classList.add("bloqueado");
        } else {
            el.classList.remove("bloqueado");
            el.disabled = false;
        }
    });
});



/* Formulário de login */
document.addEventListener("DOMContentLoaded", function () {
    const formLogin = document.getElementById("formLogin");
    const loginMensagem = document.getElementById("loginMensagem");

    // Ajuste esta URL para a porta que seu backend está ouvindo (conforme o terminal)
    const API_LOGIN_URL = "https://localhost:7003/api/conta/login";

    if (!formLogin) return;

    formLogin.addEventListener("submit", async function (e) {
        e.preventDefault();
        console.log("✅ Interceptado pelo JS!");
    

        if (loginMensagem) {
            loginMensagem.textContent = "";
            loginMensagem.className = "";
        }

        const login = (document.getElementById("loginInput")?.value || "").trim();
        const senha = (document.getElementById("senhaInput")?.value || "").trim();
        const lembrar = document.getElementById("rememberMeCheck")?.checked || false;

        if (!login || !senha) {
            if (loginMensagem) {
                loginMensagem.textContent = "Preencha login e senha.";
                loginMensagem.classList.add("text-danger");
            }
            return;
        }

        const submitBtn = formLogin.querySelector('button[type="submit"]');
        const originalText = submitBtn ? submitBtn.textContent : null;
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = "Entrando...";
        }

        try {
            const res = await fetch(API_LOGIN_URL, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                credentials: "include",
                body: JSON.stringify({
                    Login: login,
                    Password: senha,
                    RememberMe: lembrar
                })
            });

            const data = await res.json().catch(() => ({}));

            if (res.ok && data?.sucesso) {
                if (loginMensagem) {
                    loginMensagem.textContent = "Login realizado com sucesso!";
                    loginMensagem.classList.remove("text-danger");
                    loginMensagem.classList.add("text-success");
                }

                // Fecha modal
                const modalEl = document.getElementById("loginModal");
                if (modalEl) {
                    const instance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                    instance.hide();
                }

                // Atualiza menus
                document.getElementById("menuVisitante")?.classList.add("d-none");
                document.getElementById("menuLogado")?.classList.remove("d-none");

                formLogin.reset();
            } else {
                const msgBackend =
                    data?.mensagem ||
                    (Array.isArray(data?.erros) ? data.erros.join("; ") : null) ||
                    "Erro ao efetuar login.";

                if (loginMensagem) {
                    loginMensagem.textContent = msgBackend;
                    loginMensagem.classList.remove("text-success");
                    loginMensagem.classList.add("text-danger");
                }
            }
        } catch (error) {
            console.error("Erro ao logar:", error);
            if (loginMensagem) {
                loginMensagem.textContent = "Erro de conexão com o servidor.";
                loginMensagem.classList.remove("text-success");
                loginMensagem.classList.add("text-danger");
            }
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = originalText || "Entrar";
            }
        }
    });
});



/* Formulário de cadastro */
document.addEventListener("DOMContentLoaded", function () {
    const formCadastro = document.getElementById("formCadastro");
    const nomeInput = document.getElementById("nome");
    const telefoneInput = document.getElementById("telefone");
    const emailInput = document.getElementById("email");
    const senhaInput = document.getElementById("senhaCadastro");
    const confirmarSenhaInput = document.getElementById("confirmarSenha");
    const mensagem = document.getElementById("cadastroMensagem");

    // Ajuste esta URL para a porta que seu backend está ouvindo (conforme o terminal)
    const API_CADASTRO_URL = "http://localhost:7003/api/conta/registrar";

    if (!formCadastro) return;

    formCadastro.addEventListener("submit", async function (e) {
      

        e.preventDefault(); // 🔑 impede envio tradicional (que colocava dados na URL)
        mensagem.textContent = "";
        mensagem.className = "";

        const nome = (nomeInput?.value || "").trim();
        const telefone = (telefoneInput?.value || "").trim();
        const email = (emailInput?.value || "").trim();
        const senha = (senhaInput?.value || "").trim();
        const confirmarSenha = (confirmarSenhaInput?.value || "").trim();

        if (!nome || !telefone || !email || !senha || !confirmarSenha) {
            mensagem.textContent = "Preencha todos os campos.";
            mensagem.classList.add("text-danger");
            return;
        }

        if (senha.length < 4) {
            mensagem.textContent = "A senha deve ter no mínimo 4 caracteres.";
            mensagem.classList.add("text-danger");
            return;
        }

        if (senha !== confirmarSenha) {
            mensagem.textContent = "As senhas não conferem.";
            mensagem.classList.add("text-danger");
            return;
        }

        const submitBtn = formCadastro.querySelector('button[type="submit"]');
        const originalText = submitBtn ? submitBtn.textContent : null;
        if (submitBtn) {
            submitBtn.disabled = true;
            submitBtn.textContent = "Cadastrando...";
        }

        try {
            const res = await fetch(API_CADASTRO_URL, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                credentials: "include",
                body: JSON.stringify({
                    NomeCompleto: nome,
                    TelefoneComDDD: telefone,
                    Email: email,
                    Senha: senha,
                    ConfirmarSenha: confirmarSenha
                })
            });

            const data = await res.json().catch(() => ({}));

            if (res.ok && data?.sucesso) {
                mensagem.textContent = data?.mensagem || "Cadastro realizado com sucesso!";
                mensagem.classList.remove("text-danger");
                mensagem.classList.add("text-success");

                const modalEl = document.getElementById("cadastroModal");
                if (modalEl) {
                    const instance = bootstrap.Modal.getInstance(modalEl) || new bootstrap.Modal(modalEl);
                    instance.hide();
                }

                document.getElementById("menuVisitante")?.classList.add("d-none");
                document.getElementById("menuLogado")?.classList.remove("d-none");

                formCadastro.reset();
            } else {
                const msgBackend =
                    data?.mensagem ||
                    (Array.isArray(data?.erros) ? data.erros.join("; ") : null) ||
                    "Erro ao cadastrar. Verifique os dados.";

                mensagem.textContent = msgBackend;
                mensagem.classList.remove("text-success");
                mensagem.classList.add("text-danger");
            }
        } catch (error) {
            console.error("Erro ao cadastrar:", error);
            mensagem.textContent = "Erro de conexão com o servidor.";
            mensagem.classList.remove("text-success");
            mensagem.classList.add("text-danger");
        } finally {
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.textContent = originalText || "Cadastrar";
            }
        }
    });
});



