(function() {

    function arePostsVisible() {
        var deviceHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        var limit = document.body.scrollTop + (deviceHeight / 2);
        document.querySelectorAll('.post-list .post:not(.post--visible)').forEach(function(node) {
            if (node.offsetTop < limit) {
                node.classList.add('post--visible')
            }
        });
    }

    function initLoadVisibility() {
        if (document.querySelector('.post-list')) {
            arePostsVisible();
            window.addEventListener('scroll', arePostsVisible);
        }
    }

    window.onload = function() {
        initLoadVisibility()
    }
})();
