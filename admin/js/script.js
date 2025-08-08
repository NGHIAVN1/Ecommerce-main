
const sidebar = $("#sidebar");
const container = document.getElementById("grid-container-sidebar");
function openside() {
    // Get sidebar state from localStorage
    const isSidebarOpen = localStorage.getItem("sidebar") === "true";
    
    // Toggle the state
    const newState = !isSidebarOpen;
    
    // Update localStorage
    localStorage.setItem("sidebar", newState);
    
    // Apply transitions
    if (!newState) {
        $sidebar.css({
            "display": "none",
       
        })
        container.className = "grid-container";
    } else {
                // sidebar.style.transition = "transform 0.5s";
        container.className = "grid-container-sidebar";
        $sidebar.css({
            "grid-area": "sidebar",
            "display": "flex",
            "width": "100%",
            "text-align": "center",
            "flex-direction": "column",
            "align-items": "center",
            "background-color": "#322348",
            "box-shadow": "0 .5rem 1rem rgba(0,0,0,.05),inset 0 -1px 0 rgba(0,0,0,.1)",
            "transition": "0.5s",
            "position": "sticky",
            "height": "100vh",
            "top": "0%"
        });
        // Wait for transition to finish before hiding
        setTimeout(() => {
            if (!localStorage.getItem("sidebar") === "true") {
                sidebar.style.display = "grid";
            }
        }, 300);
    }
}
