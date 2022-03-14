<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Projeto_Pratico Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset("vendor/scribe/css/theme-default.style.css")); ?>" media="screen">
    <link rel="stylesheet" href="<?php echo e(asset("vendor/scribe/css/theme-default.print.css")); ?>" media="print">
    <script src="<?php echo e(asset("vendor/scribe/js/theme-default-3.7.0.js")); ?>"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost";
    </script>
    <script src="<?php echo e(asset("vendor/scribe/js/tryitout-3.7.0.js")); ?>"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="<?php echo e(asset("vendor/scribe/images/navbar.png")); ?>" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="<?php echo e(route("scribe.postman")); ?>">View Postman collection</a></li>
                            <li><a href="<?php echo e(route("scribe.openapi")); ?>">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: March 14 2022</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1>Authenticating requests</h1>
<p>To authenticate requests, include an <strong><code>Authorization</code></strong> header with the value <strong><code>"Bearer {YOUR_AUTH_KEY}"</code></strong>.</p>
<p>All authenticated endpoints are marked with a <code>requires authentication</code> badge in the documentation below.</p>
<p>You can retrieve your token by visiting your dashboard and clicking <b>Generate API token</b>.</p>

        <h1 id="auth">Auth</h1>

    

            <h2 id="auth-POSTauth-cadastro">Criar novo usuário</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Cria novo usuário</p>

<span id="example-requests-POSTauth-cadastro">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/auth/cadastro" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"nome\": \"Pedro Paulo\",
    \"email\": \"email@email.com\",
    \"telefone\": \"(38)3221-2011\",
    \"senha\": \"senha@@@\",
    \"lembrar\": false
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/auth/cadastro"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nome": "Pedro Paulo",
    "email": "email@email.com",
    "telefone": "(38)3221-2011",
    "senha": "senha@@@",
    "lembrar": false
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTauth-cadastro">
            <blockquote>
            <p>Example response (201):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Conta criada.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;nome&quot;: [
            &quot;O campo nome &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo nome deve ser uma string.&quot;,
            &quot;O campo nome n&atilde;o pode ser superior a 100 caracteres.&quot;
        ],
        &quot;email&quot;: [
            &quot;O campo email &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo email deve ser uma string.&quot;,
            &quot;O campo email n&atilde;o pode ser superior a 100 caracteres.&quot;,
            &quot;O campo email deve ser um endere&ccedil;o de e-mail v&aacute;lido.&quot;,
            &quot;O campo email j&aacute; est&aacute; sendo utilizado.&quot;
        ],
        &quot;telefone&quot;: [
            &quot;O campo telefone &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo telefone n&atilde;o &eacute; um telefone com DDD v&aacute;lido.&quot;,
            &quot;O campo telefone n&atilde;o pode ser superior a 13 caracteres.&quot;
        ],
        &quot;senha&quot;: [
            &quot;O campo senha &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo senha deve ser uma string.&quot;,
            &quot;O campo senha deve ter pelo menos 8 caracteres.&quot;,
            &quot;O campo senha n&atilde;o pode ser superior a 20 caracteres.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTauth-cadastro" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTauth-cadastro"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-cadastro"></code></pre>
</span>
<span id="execution-error-POSTauth-cadastro" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-cadastro"></code></pre>
</span>
<form id="form-POSTauth-cadastro" data-method="POST"
      data-path="auth/cadastro"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTauth-cadastro', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTauth-cadastro"
                    onclick="tryItOut('POSTauth-cadastro');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTauth-cadastro"
                    onclick="cancelTryOut('POSTauth-cadastro');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTauth-cadastro" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>auth/cadastro</code></b>
        </p>
                <p>
            <label id="auth-POSTauth-cadastro" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTauth-cadastro"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>nome</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="nome"
               data-endpoint="POSTauth-cadastro"
               data-component="body" required  hidden>
    <br>
<p>Nome do usuário. O campo value não pode ser superior a 100 caracteres.</p>        </p>
                <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTauth-cadastro"
               data-component="body" required  hidden>
    <br>
<p>Email do usuário. O campo value deve ser um endereço de e-mail válido. O campo value não pode ser superior a 100 caracteres.</p>        </p>
                <p>
            <b><code>telefone</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="telefone"
               data-endpoint="POSTauth-cadastro"
               data-component="body" required  hidden>
    <br>
<p>telefone do usuário. O campo value tem um formato inválido. O campo value não pode ser superior a 14 caracteres.</p>        </p>
                <p>
            <b><code>senha</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="senha"
               data-endpoint="POSTauth-cadastro"
               data-component="body" required  hidden>
    <br>
<p>Senha do usuário. O campo value deve ter pelo menos 8 caracteres. O campo value não pode ser superior a 20 caracteres.</p>        </p>
                <p>
            <b><code>lembrar</code></b>&nbsp;&nbsp;<small>boolean</small>     <i>optional</i> &nbsp;
                <label data-endpoint="POSTauth-cadastro" hidden>
            <input type="radio" name="lembrar"
                   value="true"
                   data-endpoint="POSTauth-cadastro"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTauth-cadastro" hidden>
            <input type="radio" name="lembrar"
                   value="false"
                   data-endpoint="POSTauth-cadastro"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Lembrar do usuário.</p>        </p>
    
    </form>

            <h2 id="auth-POSTauth-login">Logar no App</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Logar no App</p>

<span id="example-requests-POSTauth-login">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/auth/login" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"email@email.com\",
    \"senha\": \"senha@@\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/auth/login"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "email@email.com",
    "senha": "senha@@"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTauth-login">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;token&quot;: &quot;13|HfI40OFYLjWEahpM4QgWEvdqbXbVRpPIelNehKq0&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;O campo email &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo email selecionado &eacute; inv&aacute;lido.&quot;,
            &quot;O campo email n&atilde;o pode ser superior a 100 caracteres.&quot;,
            &quot;Essas credenciais n&atilde;o foram encontradas em nossos registros.&quot;
        ],
        &quot;senha&quot;: [
            &quot;O campo senha &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo senha deve ter pelo menos 8 caracteres.&quot;,
            &quot;O campo senha n&atilde;o pode ser superior a 20 caracteres.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTauth-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTauth-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-login"></code></pre>
</span>
<span id="execution-error-POSTauth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-login"></code></pre>
</span>
<form id="form-POSTauth-login" data-method="POST"
      data-path="auth/login"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTauth-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTauth-login"
                    onclick="tryItOut('POSTauth-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTauth-login"
                    onclick="cancelTryOut('POSTauth-login');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTauth-login" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>auth/login</code></b>
        </p>
                <p>
            <label id="auth-POSTauth-login" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTauth-login"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTauth-login"
               data-component="body" required  hidden>
    <br>
<p>Email do usuário. O campo value não pode ser superior a 100 caracteres.</p>        </p>
                <p>
            <b><code>senha</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="senha"
               data-endpoint="POSTauth-login"
               data-component="body" required  hidden>
    <br>
<p>Senha do usuário. O campo value deve ter pelo menos 8 caracteres. O campo value não pode ser superior a 20 caracteres.</p>        </p>
    
    </form>

        <h1 id="email">Email</h1>

    

            <h2 id="email-POSTemail-reenviar">Reenviar email de confirmação de conta</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Reenviar email de confirmação de conta</p>

<span id="example-requests-POSTemail-reenviar">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/email/reenviar" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/email/reenviar"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTemail-reenviar">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Email j&aacute; est&aacute; verificado.&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Email reenviado.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-POSTemail-reenviar" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTemail-reenviar"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail-reenviar"></code></pre>
</span>
<span id="execution-error-POSTemail-reenviar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail-reenviar"></code></pre>
</span>
<form id="form-POSTemail-reenviar" data-method="POST"
      data-path="email/reenviar"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTemail-reenviar', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTemail-reenviar"
                    onclick="tryItOut('POSTemail-reenviar');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTemail-reenviar"
                    onclick="cancelTryOut('POSTemail-reenviar');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTemail-reenviar" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>email/reenviar</code></b>
        </p>
                <p>
            <label id="auth-POSTemail-reenviar" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTemail-reenviar"
                                                                data-component="header"></label>
        </p>
                </form>

        <h1 id="password">Password</h1>

    

            <h2 id="password-POSTpassword-email">Enviar link para resetar a senha do usuário para o Email</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Envia link para resetar a senha do usuário para o Email</p>

<span id="example-requests-POSTpassword-email">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/password/email" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"email@email.com\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/email"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "email@email.com"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTpassword-email">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Enviamos seu link de redefini&ccedil;&atilde;o de senha por e-mail!&quot;
}</code>
 </pre>
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;O campo email &eacute; obrigat&oacute;rio.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTpassword-email" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTpassword-email"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-email"></code></pre>
</span>
<span id="execution-error-POSTpassword-email" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-email"></code></pre>
</span>
<form id="form-POSTpassword-email" data-method="POST"
      data-path="password/email"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTpassword-email', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTpassword-email"
                    onclick="tryItOut('POSTpassword-email');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTpassword-email"
                    onclick="cancelTryOut('POSTpassword-email');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTpassword-email" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>password/email</code></b>
        </p>
                <p>
            <label id="auth-POSTpassword-email" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTpassword-email"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTpassword-email"
               data-component="body" required  hidden>
    <br>
<p>Email do usuário. O campo value não pode ser superior a 50 caracteres.</p>        </p>
    
    </form>

            <h2 id="password-POSTpassword-reset">Processa requisição para resetar senha</h2>

<p>
<small class="badge badge-darkred">requires authentication</small>
</p>

<p>Processa requisição para resetar senha</p>

<span id="example-requests-POSTpassword-reset">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/password/reset" \
    --header "Authorization: Bearer {YOUR_AUTH_KEY}" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"email@email.com\",
    \"password\": \"senhanova@@\",
    \"password_confirmation\": \"senhanova@@\",
    \"token\": \"13|HfI40OFYLjWEahpM4QgWEvdqbXbVRpPIelNehKq0\"
}"
</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/password/reset"
);

const headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "email@email.com",
    "password": "senhanova@@",
    "password_confirmation": "senhanova@@",
    "token": "13|HfI40OFYLjWEahpM4QgWEvdqbXbVRpPIelNehKq0"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTpassword-reset">
            <blockquote>
            <p>Example response (422):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;The given data was invalid.&quot;,
    &quot;errors&quot;: {
        &quot;email&quot;: [
            &quot;O campo email &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo email deve ser uma string.&quot;,
            &quot;O campo email deve ser um endere&ccedil;o de e-mail v&aacute;lido.&quot;,
            &quot;O campo email n&atilde;o pode ser superior a 100 caracteres.&quot;
        ],
        &quot;password&quot;: [
            &quot;O campo senha &eacute; obrigat&oacute;rio.&quot;
        ],
        &quot;password_confirmation&quot;: [
            &quot;O campo confirma&ccedil;&atilde;o da senha &eacute; obrigat&oacute;rio.&quot;,
            &quot;O campo senha de confirma&ccedil;&atilde;o n&atilde;o confere.&quot;,
            &quot;O campo senha deve ter pelo menos 8 caracteres.&quot;
        ],
        &quot;token&quot;: [
            &quot;O campo token &eacute; obrigat&oacute;rio.&quot;
        ]
    }
}</code>
 </pre>
    </span>
<span id="execution-results-POSTpassword-reset" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTpassword-reset"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword-reset"></code></pre>
</span>
<span id="execution-error-POSTpassword-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword-reset"></code></pre>
</span>
<form id="form-POSTpassword-reset" data-method="POST"
      data-path="password/reset"
      data-authed="1"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTpassword-reset', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTpassword-reset"
                    onclick="tryItOut('POSTpassword-reset');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTpassword-reset"
                    onclick="cancelTryOut('POSTpassword-reset');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTpassword-reset" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>password/reset</code></b>
        </p>
                <p>
            <label id="auth-POSTpassword-reset" hidden>Authorization header:
                <b><code>Bearer </code></b><input type="text"
                                                                name="Authorization"
                                                                data-prefix="Bearer "
                                                                data-endpoint="POSTpassword-reset"
                                                                data-component="header"></label>
        </p>
                        <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="email"
               data-endpoint="POSTpassword-reset"
               data-component="body" required  hidden>
    <br>
<p>Email do usuário. O campo value deve ser um endereço de e-mail válido. O campo value não pode ser superior a 100 caracteres.</p>        </p>
                <p>
            <b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password"
               data-endpoint="POSTpassword-reset"
               data-component="body" required  hidden>
    <br>
<p>Senha nova do usuário. O campo value deve ter pelo menos 8 caracteres. O campo value não pode ser superior a 18 caracteres.</p>        </p>
                <p>
            <b><code>password_confirmation</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="password_confirmation"
               data-endpoint="POSTpassword-reset"
               data-component="body" required  hidden>
    <br>
<p>Confirmação da senha nova do usuário. O campo value deve ter pelo menos 8 caracteres. O campo value não pode ser superior a 18 caracteres.</p>        </p>
                <p>
            <b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="token"
               data-endpoint="POSTpassword-reset"
               data-component="body" required  hidden>
    <br>
<p>token do usuário. O campo value não pode ser superior a 255 caracteres.</p>        </p>
    
    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html><?php /**PATH /var/www/resources/views/scribe/index.blade.php ENDPATH**/ ?>