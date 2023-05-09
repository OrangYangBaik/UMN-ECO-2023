gsap.registerPlugin(ScrollTrigger);
let speed = 100;

// let welcome = gsap.timeline();
// ScrollTrigger.create({
//   animation: welcome,
//   trigger: "#section-1",
//   start: "-50% top",
//   end: "+=100",
//   scrub: 3
// });

window.onload = function () {
    let welcome = gsap.timeline();
    welcome.to(".gapura-kanan", { right: "5vh", duration: 2, delay: 0.5 }, 0);
    welcome.to(".gapura-kiri", { left: "5vh", duration: 2, delay: 0.5 }, 0);
    welcome.to(".eco-logo", { opacity: "1", duration: 2, delay: 0.5 }, 0);
    if ($(window).width() <= 767) {
        welcome.to(
            ".gapura-kanan",
            { right: "-12vh", duration: 2, delay: 0.5 },
            0
        );
        welcome.to(
            ".gapura-kiri",
            { left: "-12vh", duration: 2, delay: 0.5 },
            0
        );
    }
};
// welcome.to(".gapura-kanan", { right: '0' }, 0);
// welcome.to(".gapura-kiri", { left: '0' }, 0);
// welcome.to(".umn-eco-logo", { opacity: '1' }, 0);

// let scene_2_1 = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_1,
//   trigger: "#scene-2",
//   start: "-20% top",
//   end: "+=500",
//   scrub: 3
// });
// scene_2_1.to(".navbar", { backgroundColor: '#1B3627' }, 0);
// scene_2_1.to(".toggler-container", { background: '#2A6B49' }, 0);
// scene_2_1.to(".nav-main", { className: 'nav-main green-nav' }, 0);
// // Second Frame
// let scene_2_2 = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_2,
//   trigger: "#scene-2",
//   start: "5% top",
//   end: "+=1000",
//   scrub: 3
// });
// // Third Frame
// let scene_2_3 = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_3,
//   trigger: "#scene-2",
//   start: "5% top",
//   end: "+=1000",
//   scrub: 3
// });
// // scene_2_3.to("#lava-flow-2", { opacity: '0' }, 0);
// scene_2_3.to("#mountain-left", { top: '10vh' }, 0);
// scene_2_3.to("#mountain-right", { top: '10vh' }, 0);
// if($( window ).width() <= 996){
//   scene_2_3.to("#foreground", { top: '30vh' }, 0);
// }
// else if($( window ).width() <= 1300){
//   scene_2_3.to("#foreground", { top: '30vh' }, 0);
// }
// else{
//   scene_2_3.to("#foreground", { top: '10vh' }, 0);
// };
// // Fourth Frame
// let scene_2_4 = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_4,
//   trigger: "#scene-2",
//   start: "5% top",
//   end: "+=500",
//   scrub: 1
// });
// scene_2_4.to(".umn-eco-logo", { top: '30%' }, 0);
// if($( window ).width() <= 996){
//   scene_2_4.to(".gapura-kanan", { top: '42%', right: '-95%' }, 0);
//   scene_2_4.to(".gapura-kiri", { top: '42%', left: '-105%' }, 0);
//   scene_2_4.to(".waterfall_1", { top: '100%'}, 0);
// }
// else{
//   scene_2_4.to(".gapura-kanan", { top: '25%' }, 0);
//   scene_2_4.to(".gapura-kiri", { top: '5%', left: '15%' }, 0);
// };
// // Fifth Frame
// let scene_2_5 = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_5,
//   trigger: "#scene-3",
//   start: "top bottom",
//   end: "bottom bottom",
//   scrub: 2
// });
// scene_2_5.to("#foreground", { top: '-100vh' }, 0);
// // Sixth Frame
// let scene_2_6 = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_6,
//   trigger: "#scene-3",
//   start: "top top",
//   end: "+=100",
//   scrub: 3
// });
// scene_2_6.to(".navbar", { display: 'block' }, 0);
// scene_2_6.to(".navbar", { opacity: '1' }, 0);
// scene_2_6.to(".scroll-icon", { display: 'none' }, 0);
// // if($( window ).width() <= 767){
// //   scene_2_6.to(".navigation-toggle-span", { display: 'block' }, 0);
// //   scene_2_6.to(".navigation-toggle-span", { opacity: '1' }, 0);
// //   scene_2_6.to(".toggler-container", { display: 'block' }, 0);
// //   scene_2_6.to(".toggler-container", { opacity: '1' }, 0);

// // }
// // Z-index
// let scene_2_z = gsap.timeline();
// ScrollTrigger.create({
//   animation: scene_2_z,
//   trigger: "#scene-3",
//   start: "top bottom",
//   end: "+=500",
//   scrub: 3
// });
// // scene_2_z.to(".scene-2-img", { zIndex: '2' }, 0);
// scene_2_z.to(".scene-2-img", { top: '-100%'}, 0);
