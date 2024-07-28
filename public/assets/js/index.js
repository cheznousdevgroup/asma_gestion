let manage = {
  btnUpdownTable: document.querySelectorAll(".btnupdown"),
  init: function () {
    this.btnUpdownTable.forEach((btnUpDown) => {
      btnUpDown.addEventListener("click", () => this.upDown(btnUpDown));
    });
    document.querySelectorAll("[data-li='none']").forEach((li) => {
      li.addEventListener("click", () => {
        this.activeLiItem(li.getAttribute("id"))
        this.activeLiContent(li.getAttribute("id"))
        this.sideBarMenu("closeSideBar");
    });
    });
    document.getElementById("burger").addEventListener("click", (e) => {
      this.sideBarMenu(e.target.getAttribute("id"));
    });

    document.getElementById("closeSideBar").addEventListener("click", (e) => {
      this.sideBarMenu("closeSideBar");
    });

    document.getElementById("user-avatar").addEventListener("click", (e) => {
      document.getElementById("user-menu").classList.toggle("isHidden");
    });
    document.addEventListener("click", (e) => {
    let userAvatar = document.getElementById("user-avatar");
      
     if((e.target.id!="user-avatar") &&(!userAvatar.classList.contains("isHidden"))){
      document.getElementById("user-menu").classList.add("isHidden");
     }

    });
  },
  upDown: function (btnUpDown) {
    let isDown = null;
    let upDownIcon = btnUpDown.getElementsByTagName("i")[1];
    if (upDownIcon.className.includes("fi-sr-angle-small-down")) isDown = true;

    if (isDown) {
      upDownIcon.classList.remove("fi-sr-angle-small-down");
      upDownIcon.classList.add("fi-sr-angle-small-up");
      this.displayLiItem(btnUpDown.getAttribute("data-item"));
    } else {
      upDownIcon.classList.remove("fi-sr-angle-small-up");
      upDownIcon.classList.add("fi-sr-angle-small-down");
      this.hideLiItem(btnUpDown.getAttribute("data-item"));
    }
  },
  displayLiItem: function (idItem) {
    
    let liItem = document.querySelector(`[data-li-operation="${idItem}"]`);
    let liItemDiv = [...liItem.getElementsByTagName("div")];
    liItem.classList.remove("isHidden");
    liItem.classList.remove("animate__bounceOutLeft");
    liItem.classList.add("animate__animated");
    liItem.classList.add("animate__bounceInLeft");
    
    liItemDiv.forEach((item) => {
      item.addEventListener("click",()=>{
        this.activeLiItem(idItem);
        this.activeLiContent(item.getAttribute("id"));
        this.sideBarMenu("closeSideBar");
      })
    })

  },
  hideLiItem: function (idItem) {
    let liItem = document.querySelector(`[data-li-operation="${idItem}"]`);
    liItem.classList.remove("animate__bounceInLeft");
    liItem.classList.add("animate__bounceOutLeft");
    setTimeout(() => {
      liItem.classList.add("isHidden");
    }, 400);
   
  },
  activeLiItem: function (idItem) {
    document.querySelector(".activeItem").classList.remove("activeItem");
    let liI = document.getElementById(idItem)
    liI.classList.add("activeItem");
  } ,
  activeLiContent : function (liItem) {
    let contentActive = document.querySelector(".isContentVisible") 
    let isSameActiveElement = liItem.toString() === contentActive.getAttribute("data-li-content").toString()
   
    if(isSameActiveElement===false){
      contentActive.classList.add("isContentHidden");
      contentActive.classList.remove("isContentVisible");
      document.querySelector(`[data-li-content="${liItem}"]`).classList.remove("isContentHidden");
      document.querySelector(`[data-li-content="${liItem}"]`).classList.add("isContentVisible");
      document.querySelector(`[data-li-content="${liItem}"]`).classList.add("animate__animated");
      document.querySelector(`[data-li-content="${liItem}"]`).classList.add("animate__fadeIn"); 

      
    }
  } ,
  sideBarMenu: function (actionName) {
    // let btn = elem.getAttribute("id") ;

    let sideBar = document.getElementById("sideBar");
    switch (actionName) {
      case "burger":
        sideBar.classList.remove("animate__animated");
        sideBar.classList.remove("animate__bounceOutLeft");
        sideBar.classList.remove("isHidden");
        sideBar.classList.add("animate__animated");
        sideBar.classList.add("animate__bounceInLeft");
        sideBar.classList.remove("isNotAbsolute");
        sideBar.classList.add("isAbsolute");
        document.getElementById("burger").classList.remove("fi-rs-bars-staggered");
        document.body.classList.add("overflow-hidden");
        break;
      case "closeSideBar":
    
        sideBar.classList.add("isNotAbsolute");
      
          sideBar.classList.remove("isAbsolute");
          sideBar.classList.add("isHidden");
       
        
        document.getElementById("burger").classList.add("fi-rs-bars-staggered");
        document.body.classList.remove("overflow-hidden");
        break;
      default:
        break;
    }

  }
};

document.addEventListener("DOMContentLoaded", () => {
  manage.init();
});
