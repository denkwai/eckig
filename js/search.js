(function() {
    function initSearchToggle() {
        const OVERLAY_CLASS = 'search-overlay';

        const $overlay = document.createElement('div');
        $overlay.classList.add(OVERLAY_CLASS)
        document.body.appendChild($overlay);
    
        function toggleSearch(event) {
            event.preventDefault();
    
            $searchBlock.classList.toggle('search-menu__expanded'); // TODO: add proper styling for the expanded search block
            $overlay.classList.toggle('search-overlay__visible');
        }
    
        const $searchBlock = document.querySelector('.search-menu');
    
        // If search block doesn't exist, stopping the script execution
        if (!$searchBlock) {
            return;
        }
    
        const $searchBlockToggle = $searchBlock.querySelector('.search-menu__toggle');
    
        $searchBlockToggle.addEventListener('click', toggleSearch);
        $overlay.addEventListener('click', toggleSearch);
    }

    window.addEventListener('DOMContentLoaded', initSearchToggle);
}());