(() => {
    function useIsotope(event) {

        let isotopeGrid = new Isotope( '.our-work__grid', {
            itemSelector: '.our-work__grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer',
                gutter: 30
            },
            layoutMode: 'fitRows',
            fitRows: {
                gutter: 30
            }/*,
            cellsByRow: {
                columnWidth: 1200,
                rowHeight: 400
            }*/
        });

        let applyFilterFromLink = (linkObject) => {
            let filterValue = linkObject.dataset.filter;
            isotopeGrid.arrange({ filter: filterValue });
        };

        let filterGrid = function( event ) {
            event.preventDefault();

            applyFilterFromLink(this);

            let activeBtn = document.querySelector('.active');
            if (activeBtn) {
                activeBtn.classList.remove('active');
            }
            this.classList.add('active');
        };

        document.querySelectorAll('.our-work__filter-button').forEach(filterBtn => {
            filterBtn.addEventListener( 'click', filterGrid);
        });


        let activeBtn = document.querySelector('.active');

        applyFilterFromLink(activeBtn);
    }

    document.addEventListener('DOMContentLoaded', useIsotope);
})();







