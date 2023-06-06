(function(){
    
    window.addEventListener('load', load);

    // When all content is loaded
    function load(){
        // Hide loader
        var loader = document.getElementById('loader');
        loader.style.opacity = 0;
        loader.style.pointerEvents = 'none';
    }

})();