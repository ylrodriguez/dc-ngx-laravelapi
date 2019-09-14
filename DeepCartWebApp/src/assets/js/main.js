var container;
var dragItems;
var active;
var currentX;
var initialX;
var xOffset;
var containerHeight;
var containerWidth;
var limitWidth;
//Only available for mobile devices or touchable devices
var originTime, endTime;
var start, end;

function loadSlideItems() {
    container = document.querySelector(".slide-track");
    dragItems = document.querySelectorAll(".slide-track .slide-item");
    active = false;
    currentX = 0;
    initialX = 0;
    xOffset = 0;


    container.addEventListener("mousedown", dragStart, false);
    container.addEventListener("mouseup", dragEnd, false);
    container.addEventListener("mousemove", drag, false);
    container.addEventListener("touchstart", dragStart, false);
    container.addEventListener("touchend", dragEnd, false);
    container.addEventListener("touchmove", drag, false);

}

function dragStart(e) {
    containerHeight = container.offsetHeight;
    containerWidth = container.offsetWidth;
    let itemWidth = dragItems[0].offsetWidth;

    limitWidth = (itemWidth * dragItems.length) - containerWidth;

    if (e.type === "touchstart") {
        initialX = e.touches[0].clientX - xOffset;
    } else {
        initialX = e.clientX - xOffset;
    }

    active = true;
}

function dragEnd(e) {

    // if (e.type === "touchend") {
    //     end = e.changedTouches[0].clientX;
    //     endTime = new Date().getTime();
    //     let dist = Math.abs(start - end)
    //     var time = endTime - originTime;
    //     speed = dist / (time / 1000) //pixels per second
    //     console.log("Evento: ")
    //     console.log(e)
    //     console.log("distancia: "+dist)
    //     console.log("Offset: " + xOffset)
    //     console.log("Start: " + start)
    //     console.log("End: " + end)
    //     console.log("Endtime: " + endTime)
    //     console.log("Time: " + time)
    //     console.log("Speed: " + speed)
    //     console.log("-----------------------")

    //     // if(time < 400 && speed > 500){
    //     //     extraScroll()
    //     // }
    // }


    // extraScroll(speed)


    // if(speed > 300){
    //     extraScroll()
    // }
    initialX = currentX;
    active = false;
}

function drag(e) {
    if (active) {
        e.preventDefault();
        if (e.type === "touchmove") {
            currentX = e.touches[0].clientX - initialX;
        } else {
            currentX = e.clientX - initialX;
        }

        // No uso valor absoluto para no llamar errores usando mobile devices
        if (currentX <= 0 && (currentX * -1) < limitWidth) {
            
            xOffset = currentX;
            setTranslate(currentX);
        }
        if (e.offsetY == 0 || (e.offsetY + 1) == containerHeight) {
            dragEnd();
        }
    }
}

function setTranslate(xPos) {
    dragItems.forEach(element => {
        element.style.transform = "translate3d(" + xPos + "px, 0, 0)";
    });
}


// function extraScroll(){
//     let step = 25; //miliseconds unit
//     let moveEachStep = speed/step;
//     let stop = 0; 
//     //Direction right >>>>>
//     if(start > end && (currentX * -1) < limitWidth){

//         let tempX = currentX - speed;
//         if((tempX * -1) < limitWidth){
//             stop = tempX;
//         }
//         else{
//             stop = limitWidth;
//         }

//         let slideToRight = setInterval( () => {
//             currentX = currentX - moveEachStep;
//             setTranslate(currentX)
//             if(stop >= currentX){
//                 xOffset = currentX;
//                 clearInterval(slideToRight)
//             }
//         }, step)

//     }
//     else if(start < end && currentX <= 0 ){
//         let tempX = currentX + speed;
//         if(tempX <= 0){
//             stop = tempX;
//         }
//         else{
//             stop = 0;
//         }

//         let slideToLeft = setInterval( () => {
//             currentX = currentX + moveEachStep;
//             setTranslate(currentX) 
//             if(stop <= currentX){
//                 xOffset = currentX;
//                 clearInterval(slideToLeft)
//             }
//         }, step)
//     }



// }