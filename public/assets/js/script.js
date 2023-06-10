const openNav = () => {
    const openArrow = document.querySelector('#openSidebar');
    const closeArrow = document.querySelector('#closeSidebar');    

    // Sidebar Icons
    document.getElementById('sidebarDashboard').innerHTML = 'Dashboard';
    document.getElementById('sidebarProfile').innerHTML = "Profile";
    document.getElementById('sidebarUserManagement').innerHTML = "User Management";
    document.getElementById('sidebarSetting').innerHTML = "Setting";

    document.getElementById('mySidebar').style.width = '250px';
    document.getElementById('main').style.marginLeft = '250px';

    openArrow.classList.add('d-none');
    closeArrow.classList.remove('d-none');
}
  
const closeNav = () => {
    const openArrow = document.querySelector('#openSidebar');
    const closeArrow = document.querySelector('#closeSidebar');

    // Sidebar Icon s
    let dashboardIcon = '<i class="fas fa-house" title="Dashboard"></i>';
    let profileIcon = '<i class="fas fa-user" title="Profile"></i>';
    let userManagementIcon = '<i class="fas fa-user-gear" title="User Management"></i>';
    let settingIcon = '<i class="fas fa-gear" title="Gear"></i>';

    document.getElementById('sidebarDashboard').innerHTML = dashboardIcon;
    document.getElementById('sidebarProfile').innerHTML = profileIcon;
    document.getElementById('sidebarUserManagement').innerHTML = userManagementIcon;
    document.getElementById('sidebarSetting').innerHTML = settingIcon;

    document.getElementById('mySidebar').style.width = '100px';
    document.getElementById('main').style.marginLeft= '100px';

    openArrow.classList.remove('d-none');
    closeArrow.classList.add('d-none');
}