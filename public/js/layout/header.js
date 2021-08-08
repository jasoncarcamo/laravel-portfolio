function initiateGreeting(){
    const greetingSection = document.getElementById("greeting-section");
    const greetingHeader = document.getElementById("greeting-section-header");
    const animationContainer = document.getElementById("icon-animation-container");
    const iconLine = document.getElementsByClassName("greeting-icon-line")[0];

    if(!greetingHeader){
        return;
    }

    document.addEventListener("scroll", freezeScroll);

    setTimeout(()=>{
        greetingHeader.classList.add("fadeIn");

        greetingHeader.addEventListener("transitionend", (e)=>{
            animationContainer.classList.add("fadeIn");
        });

        animationContainer.addEventListener("transitionend", (e)=>{
            iconLine.classList.add("stretch");
        });

        iconLine.addEventListener("transitionend", (e)=>{
            setTimeout(()=>{
                greetingSection.classList.add("close-greeting-section");
                document.removeEventListener("scroll", freezeScroll);
            }, 500);
        });
    }, 500);
}

function freezeScroll(e){
    e.preventDefault();

    window.scrollTo(0, 0);
}

// starts header section functions
function handleMenuBurger(){
    const navHeader = document.getElementById("nav-header");
    const navBurger = document.getElementById("nav-burger");
    
    navBurger.addEventListener("click", (e)=>{
        if(!navHeader.classList.contains("show-header")){
            console.log("removed")
            navHeader.classList.add("show-header");
        } else{
            console.log("added")
            navHeader.classList.remove("show-header");
        };
    });
}

function handleBurgerHover(){
    const navBurger = document.getElementById("nav-burger");
    const burgerLines = document.getElementsByClassName("burger-line");

    navBurger.addEventListener("mouseenter", (e)=>{
        console.log("Hovering")
        burgerLines[0].classList.toggle("shrink-line");
        burgerLines[1].classList.toggle("stretch-line");
        burgerLines[2].classList.toggle("shrink-line");
    });

    navBurger.addEventListener("mouseleave", (e)=>{
        console.log("Hovering")
        burgerLines[0].classList.toggle("shrink-line");
        burgerLines[1].classList.toggle("stretch-line");
        burgerLines[2].classList.toggle("shrink-line");
    });
}

initiateGreeting();
handleMenuBurger();
handleBurgerHover();