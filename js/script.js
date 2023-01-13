$.get( "http://dev7.pro/gitSelect/api/countries.php", function( data ) {
  $.each( data, function( key, country ) {
      $('#contries').append("<option value='"+key+"'>"+country.country_name+"</option>")
    })
})
$.get( "http://dev7.pro/gitSelect/api/states.php", function( data ) {
  $.each( data, function( key, state ) {
      $('#states').append("<option value='"+state.country_id+"'>"+state.state_name+"</option>")
    })
})
$.get( "http://dev7.pro/gitSelect/api/districs.php", function( data ) {
  $.each( data, function(key, distric ) {
      $('#districs').append("<option value='"+distric.steate_id+"'>"+distric.district_name+"</option>")
    })
})
// $('.distric').prop('disabled', true).hide()
// $('.state').change(function(){
//     $('.distric').prop('disabled', true).hide()
//     var state = $(this).val()
//     $('.state-' + state).prop('disabled',false).show()
// })
// $('.village').prop('disabled', true).hide()
// $('.distric').change(function(){
//     $('.village').prop('disabled', true).hide()
//     var village = $(this).val()
//     $('.vill-' + village).prop('disabled',false).show()
// })

