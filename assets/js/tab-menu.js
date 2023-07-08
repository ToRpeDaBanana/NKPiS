
$('.custom-checkbox').click(function(event){
    var button = document.getElementById("check-btn");
    var checkbox = document.getElementById("check");
  
    if (checkbox.checked) {
      button.disabled = false;
    } else {
      button.disabled = true;
    }
  });
  
  $('#btn-yes').click(function(event){
    var divElement = document.getElementById('div-otziv');
    var textElement = document.getElementById('text-confirmation');
  
    if (divElement.style.display === 'none') {
      divElement.style.display = 'flex';
      textElement.style.display = 'none';
    } else {
      divElement.style.display = 'none';
      textElement.style.display = 'block';
    }
  });
  $('.btn btn-link').click(function(event){
    var divElement = document.getElementById('div-otziv');
    var textElement = document.getElementById('text-confirmation');
  
    if (divElement.style.display === 'none') {
      divElement.style.display = 'flex';
      textElement.style.display = 'none';
    } else {
      divElement.style.display = 'none';
      textElement.style.display = 'block';
    }
  });