<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
</head>
<body>
    <div id="disqus_thread"></div>
<script>
/**
* RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
* LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables
*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL; // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');

s.src = '//pexea12.disqus.com/embed.js';

s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
    <input type="text" v-model="query" v-on:keyup="search">

    <div class="results">
        <article v-for="user in users">
            <h2>@{{{ user._highlightResult.name.value }}}</h2>
            <h4>@{{ user.rating }}</h4>
        </article>
    </div>
    <script src="/js/algoliasearch.min.js"></script>
    <script src="/js/vue.min.js"></script>
    <script>
        
        new Vue({
            el: 'body',
            data: { query: '', users: [] },
            ready: function() {
                this.client = algoliasearch("Z3FQB6D6HE", "1a935447a04085b30e10986d9eca2453");
                this.index = this.client.initIndex('getstarted_actors');
            },
            methods: {
                search: function() {
                    this.index.search(this.query, function(error, results) {
                        this.users = results.hits;
                    }.bind(this));
                }
            }
        });
        
      
    </script>
</body>
</html>

