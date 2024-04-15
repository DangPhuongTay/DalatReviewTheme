const VND = new Intl.NumberFormat('vi-VN', {
  style: 'currency',
  currency: 'VND',
});


function getAllUrlParams(url) {
  // get query string from url (optional) or window
  var queryString = url ? url.split('?')[1] : window.location.search.slice(1);

  // we'll store the parameters here
  var obj = {};

  // if query string exists
  if (queryString) {

      // stuff after # is not part of query string, so get rid of it
      queryString = queryString.split('#')[0];

      // split our query string into its component parts
      var arr = queryString.split('&');

      for (var i = 0; i < arr.length; i++) {
          // separate the keys and the values
          var a = arr[i].split('=');

          // set parameter name and value (use 'true' if empty)
          var paramName = a[0];
          var paramValue = typeof (a[1]) === 'undefined' ? true : a[1];

          // (optional) keep case consistent
          paramName = paramName.toLowerCase();
          if (typeof paramValue === 'string') paramValue = paramValue.toLowerCase();

          // if the paramName ends with square brackets, e.g. colors[] or colors[2]
          if (paramName.match(/\[(\d+)?\]$/)) {

              // create key if it doesn't exist
              var key = paramName.replace(/\[(\d+)?\]/, '');
              if (!obj[key]) obj[key] = [];

              // if it's an indexed array e.g. colors[2]
              if (paramName.match(/\[\d+\]$/)) {
                  // get the index value and add the entry at the appropriate position
                  var index = /\[(\d+)\]/.exec(paramName)[1];
                  obj[key][index] = paramValue;
              } else {
                  // otherwise add the value to the end of the array
                  obj[key].push(paramValue);
              }
          } else {
              // we're dealing with a string
              if (!obj[paramName]) {
                  // if it doesn't exist, create property
                  obj[paramName] = paramValue;
              } else if (obj[paramName] && typeof obj[paramName] === 'string'){
                  // if property does exist and it's a string, convert it to an array
                  obj[paramName] = [obj[paramName]];
                  obj[paramName].push(paramValue);
              } else {
                  // otherwise add the property
                  obj[paramName].push(paramValue);
              }
          }
      }
  }

  return obj;
}

function getVals(){
    // Get slider values
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
    var slide1 = parseFloat( slides[0].value );
    var slide2 = parseFloat( slides[1].value );
    // Neither slider will clip the other, so make sure we determine which is larger
    if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }
    
    var displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = VND.format(slide1) + " - " + VND.format(slide2);
  }
function getValsUrl(){
    // Get slider values
    var parent = this.parentNode;
    var slides = parent.getElementsByTagName("input");
    var slideOri1 = parseFloat( slides[0].value );
    var slideOri2 = parseFloat( slides[1].value );
    var slideUrl1 = parseFloat(getAllUrlParams().minprice);
    var slideUrl2 = parseFloat(getAllUrlParams().maxprice);
    if((slideOri1 != slideUrl1 || slideOri2 != slideUrl2) || (slideOri1 != slideUrl1 && slideOri2 != slideUrl2)){
      var slide1 = slideOri1;
      var slide2 = slideOri2;
    }else{
      var slide1 = slideUrl1;
      var slide2 = slideUrl2;
    }
    // Neither slider will clip the other, so make sure we determine which is larger
    if( slide1 > slide2 ){ var tmp = slide2; slide2 = slide1; slide1 = tmp; }
    
    var displayElement = parent.getElementsByClassName("rangeValues")[0];
        displayElement.innerHTML = VND.format(slide1) + " - " + VND.format(slide2);
  }
  window.onload = function(){
    // Initialize Sliders
    var sliderSections = document.getElementsByClassName("range-slider");
        for( var x = 0; x < sliderSections.length; x++ ){
          var sliders = sliderSections[x].getElementsByTagName("input");
          for( var y = 0; y < sliders.length; y++ ){
            if( sliders[y].type ==="range" ){
              if(getAllUrlParams().minprice || getAllUrlParams().maxprice){
                sliders[0].value = getAllUrlParams().minprice ;
                sliders[1].value  = getAllUrlParams().maxprice ;
                sliders[y].oninput = getValsUrl;
                // Manually trigger event first time to display values
                sliders[y].oninput();
              }else{
                sliders[y].oninput = getVals;
                // Manually trigger event first time to display values
                sliders[y].oninput();
              }


            }
          }
        }
  }