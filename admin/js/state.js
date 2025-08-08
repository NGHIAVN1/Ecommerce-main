    let sidebarHidden = window.localStorage.getItem("sidebar");
    const $sidebar = $("#sidebar");
    const $container = $("#grid-container-sidebar");
    
    if (sidebarHidden == "true") {
        $sidebar.show();
        $container.removeClass("grid-container").addClass("grid-container-sidebar");
        //  document.getElementById("grid-container-sidebar").className = "grid-container-sidebar"

    } else {
        $sidebar.hide();
        // document.getElementById("grid-container-sidebar").className = "grid-container"
        $container.removeClass("grid-container-sidebar").addClass("grid-container");

    }