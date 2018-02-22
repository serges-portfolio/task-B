function initMap() {
    var urulu = {lat: 55.807818, lng: 37.507897};
    var map = new google.maps.Map(document.querySelector('.footer__g-map'), {
        center: {lat: 55.807818, lng: 37.507897},
        scrollwheel: false,
        zoom: 15
    });
    var marker = new google.maps.Marker({
        position: urulu,
        map: map,
        icon: 'assets/map-logo.png'
    });
}
