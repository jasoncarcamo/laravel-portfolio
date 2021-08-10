$(function(){
    function popSkills(){
        
        const frontendSkills = document.getElementById("frontend-skills");
        const backendSkills = document.getElementById("backend-skills");
        const tools = document.getElementById("development-tools");

        frontendSkills.classList.add("pop");

        frontendSkills.addEventListener("transitionend", (e)=>{
            backendSkills.classList.add("pop");
        });

        backendSkills.addEventListener("transitionend", (e)=>{
            tools.classList.add("pop");
        });
    };

    
    popSkills();
});