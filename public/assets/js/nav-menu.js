
// const handleClick = event => {
//   const divs = document.querySelectorAll("#nav-menu")
//   const target = event.target.nextElementSibling
//   target.classList.toggle("hide")
//   divs.forEach(item => {
//     if (item !== target) {
//       item.classList.add("hide")
//       item.classList.remove("show")

//     }
//     else if (item == target){

//       item.classList.toggle("show")
      
//      }
     
//   })
// }
$(document).on('click','#hh1', function(){
  const divs = document.querySelectorAll("#nav-menu")
  const target = event.target.nextElementSibling
  target.classList.toggle("hide")
  divs.forEach(item => {
    if (item !== target) {
      item.classList.add("hide")
      item.classList.remove("show")

    }
    else if (item == target){

      item.classList.toggle("show")
      
     }
     
  })
});



$(document).on('click','#hh', function(){
  const divs = document.querySelectorAll("#pod-nav-menu")
  const target = event.target.nextElementSibling
  target.classList.toggle("hide")

  divs.forEach(item => {
    if (item !== target) {
      item.classList.add("hide")
      item.classList.remove("show")
    } else if(item == target){
      item.classList.toggle("show")
    }
  })
});

