const openNav = () => {
    const openArrow = document.querySelector('#openSidebar')
    const closeArrow = document.querySelector('#closeSidebar')    

    document.getElementById('mySidebar').style.width = '250px';
    document.getElementById('main').style.marginLeft = '250px';
    
    openArrow.classList.add('d-none');
    closeArrow.classList.remove('d-none');
}
  
const closeNav = () => {
    const openArrow = document.querySelector('#openSidebar')
    const closeArrow = document.querySelector('#closeSidebar')

    document.getElementById('mySidebar').style.width = '0';
    document.getElementById('main').style.marginLeft= '0';

    openArrow.classList.remove('d-none');
    closeArrow.classList.add('d-none');
}