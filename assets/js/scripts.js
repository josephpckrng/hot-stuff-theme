document.addEventListener('DOMContentLoaded', function () {
    var controller = new ScrollMagic.Controller();

    var rotationTween = gsap.to('.spin', { rotation: 360, ease: 'none' });

    var scene = new ScrollMagic.Scene({
        triggerElement: 'body',
        duration: '200%', // Adjust the duration as needed
        triggerHook: 0,
    })
    .setTween(rotationTween)
    .addTo(controller)
    .on('update', function (event) {
        var progress = event.progress;
        rotationTween.progress(progress);
    });
});
