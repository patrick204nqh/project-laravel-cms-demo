$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
function insertParam(key, value) {
  key = encodeURIComponent(key);
  value = encodeURIComponent(value);
  var kvp = document.location.search.substr(1).split('&');
  let i=0;
  for(; i<kvp.length; i++){
      if (kvp[i].startsWith(key + '=')) {
          let pair = kvp[i].split('=');
          pair[1] = value;
          kvp[i] = pair.join('=');
          break;
      }
  }
  if(i >= kvp.length){
      kvp[kvp.length] = [key,value].join('=');
  }
  let params = kvp.join('&');
  document.location.search = params;
}
// Pagination per_page selector
$('.filter__per-page--option').on('click', function(e) {
  insertParam('per_page', $(e.target).data('per-page'));
})
// Sort table
$('.filter__sort-by--option').on('click', function(e) {
  insertParam('sort', $(e.target).data('sort-by'));
})
$('.filter__sort-direction--option').on('click', function(e) {
  insertParam('direction', $(e.target).data('sort-direction'));
})
