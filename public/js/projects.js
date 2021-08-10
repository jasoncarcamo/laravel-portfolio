function slideProjects(){
    const projects = document.getElementsByClassName("project");

    Array.from(projects).forEach((project, index)=>{
        if(isInViewport(project)){
            project.classList.add("slide-project");
        };
    });

    window.addEventListener("scroll", (e)=>{
        Array.from(projects).forEach((project, index)=>{
            if(isInViewport(project)){
                project.classList.add("slide-project");
            };            
        });
    });
};

function isInViewport(element) {
    var rect = element.getBoundingClientRect();
    var html = document.documentElement;
    
    return (
        rect.top >= 0 &&
        rect.left <= 0 &&
        rect.bottom <= (window.innerHeight || html.clientHeight) &&
        rect.right <= (window.innerWidth || html.clientWidth)
    );
};

function toggleprojectOptions(){
    const authorOptions = document.getElementsByClassName("author-options");

    Array.from(authorOptions).forEach((container, containerindex)=>{
        container.addEventListener("click", (e)=>{
            container.children[3].classList.toggle("show-project-options")
        });
    });
};

slideProjects();
toggleprojectOptions();