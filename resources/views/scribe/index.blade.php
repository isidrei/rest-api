<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-4.1.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-4.1.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products">
                                <a href="#endpoints-GETapi-products">GET api/products</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products--product_id-">
                                <a href="#endpoints-GETapi-products--product_id-">GET api/products/{product_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-search--keywords-">
                                <a href="#endpoints-GETapi-products-search--keywords-">GET api/products/search/{keywords}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-category-categories">
                                <a href="#endpoints-GETapi-products-category-categories">GET api/products/category/categories</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-products-category--category_name-">
                                <a href="#endpoints-GETapi-products-category--category_name-">GET api/products/category/{category_name}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-products-add">
                                <a href="#endpoints-POSTapi-products-add">POST api/products/add</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-products--product_id-">
                                <a href="#endpoints-PUTapi-products--product_id-">PUT api/products/{product_id}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-products--product_id-">
                                <a href="#endpoints-DELETEapi-products--product_id-">DELETE api/products/{product_id}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: October 21, 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-products">GET api/products</h2>

<p>
</p>



<span id="example-requests-GETapi-products">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: [
        {
            &quot;id&quot;: 1,
            &quot;title&quot;: &quot;Blonde Album&quot;,
            &quot;description&quot;: &quot;Made by Frank Ocean&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 800,
            &quot;brand&quot;: &quot;Blonde&quot;,
            &quot;category&quot;: &quot;Album&quot;,
            &quot;image&quot;: &quot;https://preview.redd.it/sbbgz064d5kz.jpg?auto=webp&amp;s=1a10658235fc5dc98799680931fdb6d32ea4c416&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 2,
            &quot;title&quot;: &quot;Travis Scott Jordan 1&quot;,
            &quot;description&quot;: &quot;Made by Travis Scott&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 9000,
            &quot;brand&quot;: &quot;Jordan&quot;,
            &quot;category&quot;: &quot;shoes&quot;,
            &quot;image&quot;: &quot;https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSmJoqbdZEqcCOELJ7JEImSqQzgSFF_IbF7DQ&amp;usqp=CAU&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: null
        },
        {
            &quot;id&quot;: 3,
            &quot;title&quot;: &quot;Santa Cruz Skateboard&quot;,
            &quot;description&quot;: &quot;Made by Santa Cruz&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 9000,
            &quot;brand&quot;: &quot;Santa Cruz&quot;,
            &quot;category&quot;: &quot;skateboard&quot;,
            &quot;image&quot;: &quot;https://cdn.shopify.com/s/files/1/0555/4257/products/SC_ScreamingHand_Bottom_SC362_FullComp.jpg?v=1612291408&quot;,
            &quot;created_at&quot;: null,
            &quot;updated_at&quot;: &quot;2022-10-07T16:49:53.000000Z&quot;
        },
        {
            &quot;id&quot;: 5,
            &quot;title&quot;: &quot;minima&quot;,
            &quot;description&quot;: &quot;consectetur&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 219.6,
            &quot;brand&quot;: &quot;veritatis&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00aa00?text=product+ut&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;et&quot;,
            &quot;description&quot;: &quot;omnis&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 442.7,
            &quot;brand&quot;: &quot;amet&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffff?text=product+ab&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 7,
            &quot;title&quot;: &quot;sit&quot;,
            &quot;description&quot;: &quot;sint&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 236.7,
            &quot;brand&quot;: &quot;porro&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00eedd?text=product+in&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 8,
            &quot;title&quot;: &quot;quisquam&quot;,
            &quot;description&quot;: &quot;pariatur&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 278.9,
            &quot;brand&quot;: &quot;omnis&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/008833?text=product+aliquid&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 9,
            &quot;title&quot;: &quot;aut&quot;,
            &quot;description&quot;: &quot;dolores&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 371.6,
            &quot;brand&quot;: &quot;sapiente&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00bb22?text=product+cum&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 10,
            &quot;title&quot;: &quot;eum&quot;,
            &quot;description&quot;: &quot;et&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 493.8,
            &quot;brand&quot;: &quot;dolore&quot;,
            &quot;category&quot;: &quot;electronic device&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0022ee?text=product+dolor&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 11,
            &quot;title&quot;: &quot;exercitationem&quot;,
            &quot;description&quot;: &quot;et&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 219.4,
            &quot;brand&quot;: &quot;perspiciatis&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00aaff?text=product+fugiat&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 12,
            &quot;title&quot;: &quot;officiis&quot;,
            &quot;description&quot;: &quot;ea&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 288.7,
            &quot;brand&quot;: &quot;voluptatem&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/000077?text=product+quasi&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 13,
            &quot;title&quot;: &quot;eaque&quot;,
            &quot;description&quot;: &quot;nostrum&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 483.3,
            &quot;brand&quot;: &quot;possimus&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0088ee?text=product+minus&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 14,
            &quot;title&quot;: &quot;natus&quot;,
            &quot;description&quot;: &quot;est&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 346.2,
            &quot;brand&quot;: &quot;maxime&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00bb77?text=product+non&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 15,
            &quot;title&quot;: &quot;rerum&quot;,
            &quot;description&quot;: &quot;reiciendis&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 284.8,
            &quot;brand&quot;: &quot;consequuntur&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00cc66?text=product+maxime&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 16,
            &quot;title&quot;: &quot;est&quot;,
            &quot;description&quot;: &quot;vel&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 352.6,
            &quot;brand&quot;: &quot;molestiae&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0077bb?text=product+molestias&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 17,
            &quot;title&quot;: &quot;sit&quot;,
            &quot;description&quot;: &quot;illo&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 259.5,
            &quot;brand&quot;: &quot;maiores&quot;,
            &quot;category&quot;: &quot;electronic device&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffaa?text=product+consectetur&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;title&quot;: &quot;et&quot;,
            &quot;description&quot;: &quot;vel&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 479,
            &quot;brand&quot;: &quot;nihil&quot;,
            &quot;category&quot;: &quot;electronic device&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ff44?text=product+ratione&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 19,
            &quot;title&quot;: &quot;quos&quot;,
            &quot;description&quot;: &quot;voluptatum&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 350.2,
            &quot;brand&quot;: &quot;deserunt&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ff22?text=product+ex&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 20,
            &quot;title&quot;: &quot;corrupti&quot;,
            &quot;description&quot;: &quot;dolor&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 373.5,
            &quot;brand&quot;: &quot;quas&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0099cc?text=product+sint&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 21,
            &quot;title&quot;: &quot;suscipit&quot;,
            &quot;description&quot;: &quot;facere&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 499.9,
            &quot;brand&quot;: &quot;aut&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/007777?text=product+sed&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 22,
            &quot;title&quot;: &quot;velit&quot;,
            &quot;description&quot;: &quot;itaque&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 219.1,
            &quot;brand&quot;: &quot;et&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/0088dd?text=product+doloribus&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 23,
            &quot;title&quot;: &quot;aut&quot;,
            &quot;description&quot;: &quot;molestiae&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 215.9,
            &quot;brand&quot;: &quot;necessitatibus&quot;,
            &quot;category&quot;: &quot;apparel&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/000099?text=product+itaque&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        },
        {
            &quot;id&quot;: 24,
            &quot;title&quot;: &quot;omnis&quot;,
            &quot;description&quot;: &quot;a&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 455.8,
            &quot;brand&quot;: &quot;labore&quot;,
            &quot;category&quot;: &quot;electronic device&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/005599?text=product+aperiam&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products"></code></pre>
</span>
<span id="execution-error-GETapi-products" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products"></code></pre>
</span>
<form id="form-GETapi-products" data-method="GET"
      data-path="api/products"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products"
                    onclick="tryItOut('GETapi-products');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products"
                    onclick="cancelTryOut('GETapi-products');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-products--product_id-">GET api/products/{product_id}</h2>

<p>
</p>



<span id="example-requests-GETapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products--product_id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: {
        &quot;id&quot;: 1,
        &quot;title&quot;: &quot;Blonde Album&quot;,
        &quot;description&quot;: &quot;Made by Frank Ocean&quot;,
        &quot;currency&quot;: &quot;PHP&quot;,
        &quot;price&quot;: 800,
        &quot;brand&quot;: &quot;Blonde&quot;,
        &quot;category&quot;: &quot;Album&quot;,
        &quot;image&quot;: &quot;https://preview.redd.it/sbbgz064d5kz.jpg?auto=webp&amp;s=1a10658235fc5dc98799680931fdb6d32ea4c416&quot;,
        &quot;created_at&quot;: null,
        &quot;updated_at&quot;: null
    }
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products--product_id-"></code></pre>
</span>
<span id="execution-error-GETapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products--product_id-"></code></pre>
</span>
<form id="form-GETapi-products--product_id-" data-method="GET"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products--product_id-"
                    onclick="tryItOut('GETapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products--product_id-"
                    onclick="cancelTryOut('GETapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products--product_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="product_id"
               data-endpoint="GETapi-products--product_id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

                    <h2 id="endpoints-GETapi-products-search--keywords-">GET api/products/search/{keywords}</h2>

<p>
</p>



<span id="example-requests-GETapi-products-search--keywords-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/search/et" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/search/et"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-search--keywords-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 57
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: [
        {
            &quot;id&quot;: 6,
            &quot;title&quot;: &quot;et&quot;,
            &quot;description&quot;: &quot;omnis&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 442.7,
            &quot;brand&quot;: &quot;amet&quot;,
            &quot;category&quot;: &quot;book&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ffff?text=product+ab&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:35.000000Z&quot;
        },
        {
            &quot;id&quot;: 18,
            &quot;title&quot;: &quot;et&quot;,
            &quot;description&quot;: &quot;vel&quot;,
            &quot;currency&quot;: &quot;PHP&quot;,
            &quot;price&quot;: 479,
            &quot;brand&quot;: &quot;nihil&quot;,
            &quot;category&quot;: &quot;electronic device&quot;,
            &quot;image&quot;: &quot;https://via.placeholder.com/640x480.png/00ff44?text=product+ratione&quot;,
            &quot;created_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;,
            &quot;updated_at&quot;: &quot;2022-10-08T14:52:36.000000Z&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-search--keywords-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-search--keywords-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-search--keywords-"></code></pre>
</span>
<span id="execution-error-GETapi-products-search--keywords-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-search--keywords-"></code></pre>
</span>
<form id="form-GETapi-products-search--keywords-" data-method="GET"
      data-path="api/products/search/{keywords}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-search--keywords-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-search--keywords-"
                    onclick="tryItOut('GETapi-products-search--keywords-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-search--keywords-"
                    onclick="cancelTryOut('GETapi-products-search--keywords-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-search--keywords-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/search/{keywords}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>keywords</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="keywords"
               data-endpoint="GETapi-products-search--keywords-"
               value="et"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

                    <h2 id="endpoints-GETapi-products-category-categories">GET api/products/category/categories</h2>

<p>
</p>



<span id="example-requests-GETapi-products-category-categories">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/category/categories" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/category/categories"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-category-categories">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 56
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;category&quot;: &quot;Album&quot;
        },
        {
            &quot;category&quot;: &quot;shoes&quot;
        },
        {
            &quot;category&quot;: &quot;skateboard&quot;
        },
        {
            &quot;category&quot;: &quot;book&quot;
        },
        {
            &quot;category&quot;: &quot;apparel&quot;
        },
        {
            &quot;category&quot;: &quot;electronic device&quot;
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-category-categories" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-category-categories"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-category-categories"></code></pre>
</span>
<span id="execution-error-GETapi-products-category-categories" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-category-categories"></code></pre>
</span>
<form id="form-GETapi-products-category-categories" data-method="GET"
      data-path="api/products/category/categories"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-category-categories', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-category-categories"
                    onclick="tryItOut('GETapi-products-category-categories');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-category-categories"
                    onclick="cancelTryOut('GETapi-products-category-categories');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-category-categories" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/category/categories</code></b>
        </p>
                    </form>

                    <h2 id="endpoints-GETapi-products-category--category_name-">GET api/products/category/{category_name}</h2>

<p>
</p>



<span id="example-requests-GETapi-products-category--category_name-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/products/category/labore" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/category/labore"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-products-category--category_name-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 55
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;products&quot;: []
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-products-category--category_name-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-products-category--category_name-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-products-category--category_name-"></code></pre>
</span>
<span id="execution-error-GETapi-products-category--category_name-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-products-category--category_name-"></code></pre>
</span>
<form id="form-GETapi-products-category--category_name-" data-method="GET"
      data-path="api/products/category/{category_name}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-products-category--category_name-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-products-category--category_name-"
                    onclick="tryItOut('GETapi-products-category--category_name-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-products-category--category_name-"
                    onclick="cancelTryOut('GETapi-products-category--category_name-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-products-category--category_name-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/products/category/{category_name}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>category_name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="category_name"
               data-endpoint="GETapi-products-category--category_name-"
               value="labore"
               data-component="url" hidden>
    <br>

            </p>
                    </form>

                    <h2 id="endpoints-POSTapi-products-add">POST api/products/add</h2>

<p>
</p>



<span id="example-requests-POSTapi-products-add">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/products/add" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"dolorem\",
    \"description\": \"unde\",
    \"currency\": \"inventore\",
    \"price\": \"eaque\",
    \"brand\": \"eius\",
    \"category\": \"amet\",
    \"image\": \"qui\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/add"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "dolorem",
    "description": "unde",
    "currency": "inventore",
    "price": "eaque",
    "brand": "eius",
    "category": "amet",
    "image": "qui"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-products-add">
</span>
<span id="execution-results-POSTapi-products-add" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-products-add"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-products-add"></code></pre>
</span>
<span id="execution-error-POSTapi-products-add" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-products-add"></code></pre>
</span>
<form id="form-POSTapi-products-add" data-method="POST"
      data-path="api/products/add"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-products-add', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-products-add"
                    onclick="tryItOut('POSTapi-products-add');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-products-add"
                    onclick="cancelTryOut('POSTapi-products-add');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-products-add" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/products/add</code></b>
        </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="title"
               data-endpoint="POSTapi-products-add"
               value="dolorem"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="description"
               data-endpoint="POSTapi-products-add"
               value="unde"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>currency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="currency"
               data-endpoint="POSTapi-products-add"
               value="inventore"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="price"
               data-endpoint="POSTapi-products-add"
               value="eaque"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="brand"
               data-endpoint="POSTapi-products-add"
               value="eius"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="category"
               data-endpoint="POSTapi-products-add"
               value="amet"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="image"
               data-endpoint="POSTapi-products-add"
               value="qui"
               data-component="body" hidden>
    <br>

        </p>
        </form>

                    <h2 id="endpoints-PUTapi-products--product_id-">PUT api/products/{product_id}</h2>

<p>
</p>



<span id="example-requests-PUTapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"title\": \"beatae\",
    \"description\": \"quia\",
    \"currency\": \"molestiae\",
    \"price\": \"quibusdam\",
    \"brand\": \"veniam\",
    \"category\": \"et\",
    \"image\": \"autem\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "title": "beatae",
    "description": "quia",
    "currency": "molestiae",
    "price": "quibusdam",
    "brand": "veniam",
    "category": "et",
    "image": "autem"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-products--product_id-">
</span>
<span id="execution-results-PUTapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-products--product_id-"></code></pre>
</span>
<span id="execution-error-PUTapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-products--product_id-"></code></pre>
</span>
<form id="form-PUTapi-products--product_id-" data-method="PUT"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-products--product_id-"
                    onclick="tryItOut('PUTapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-products--product_id-"
                    onclick="cancelTryOut('PUTapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-products--product_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="product_id"
               data-endpoint="PUTapi-products--product_id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <p>
            <b><code>title</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="title"
               data-endpoint="PUTapi-products--product_id-"
               value="beatae"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="description"
               data-endpoint="PUTapi-products--product_id-"
               value="quia"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>currency</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="currency"
               data-endpoint="PUTapi-products--product_id-"
               value="molestiae"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>price</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="price"
               data-endpoint="PUTapi-products--product_id-"
               value="quibusdam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>brand</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="brand"
               data-endpoint="PUTapi-products--product_id-"
               value="veniam"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>category</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="category"
               data-endpoint="PUTapi-products--product_id-"
               value="et"
               data-component="body" hidden>
    <br>

        </p>
                <p>
            <b><code>image</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
                <input type="text"
               name="image"
               data-endpoint="PUTapi-products--product_id-"
               value="autem"
               data-component="body" hidden>
    <br>

        </p>
        </form>

                    <h2 id="endpoints-DELETEapi-products--product_id-">DELETE api/products/{product_id}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-products--product_id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/products/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/products/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-products--product_id-">
</span>
<span id="execution-results-DELETEapi-products--product_id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-products--product_id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-products--product_id-"></code></pre>
</span>
<span id="execution-error-DELETEapi-products--product_id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-products--product_id-"></code></pre>
</span>
<form id="form-DELETEapi-products--product_id-" data-method="DELETE"
      data-path="api/products/{product_id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-products--product_id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-products--product_id-"
                    onclick="tryItOut('DELETEapi-products--product_id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-products--product_id-"
                    onclick="cancelTryOut('DELETEapi-products--product_id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-products--product_id-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/products/{product_id}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>product_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
                <input type="number"
               name="product_id"
               data-endpoint="DELETEapi-products--product_id-"
               value="1"
               data-component="url" hidden>
    <br>
<p>The ID of the product.</p>
            </p>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
