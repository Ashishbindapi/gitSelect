$(document).ready(function(){
  var select = $('<select>').attr('id', 'countries')
  select.append($('<option>').text('Select country').val(''))
   $.get( "http://dev7.pro/gitSelect/api/countries.php", function( countries ) {
   $.each( countries, function( key, country ) {
    select.append($('<option>').text(country.country_name).val(country.id))
    })
    $('#app').append(select)
  })
  $(document).on('change', '#countries', function(){
    var select = $('<select>').attr('id', 'state')
    select.append($('<option>').text('Select state').val(''))
    $.get('http://dev7.pro/gitSelect/api/states.php?country_id=' + $(this).val(), function( states ) {
     $.each( states, function( key, state ) {
      select.append($('<option>').text(state.state_name).val(state.country_id))
      })
      $('#state').remove();
      $('#app').append(select)
    })
    $(document).on('change', '#state', function(){
      var select = $('<select>').attr('id', 'distric')
      select.append($('<option>').text('Select distric').val(''))
      $.get('http://dev7.pro/gitSelect/api/district.php?steate_id=' + $(this).val(), function( district ) {
       $.each( district, function( key, distric ) {
        select.append($('<option>').text(distric.state_name).val(distric.country_id))
        })
        $('#distric').remove();
        $('#app').append(select)
      })
    })
  })
})





// $.get( "http://dev7.pro/gitSelect/api/countries.php", function( data ) {
//   $.each( data, function( key, country ) {
//       $('#contries').append("<option value='"+key+"'>"+country.country_name+"</option>")
//     })
// })
// $.get( "http://dev7.pro/gitSelect/api/states.php", function( data ) {
//   $.each( data, function( key, state ) {
//       $('#states').append("<option value='"+state.country_id+"'>"+state.state_name+"</option>")
//     })
// })
// $.get( "http://dev7.pro/gitSelect/api/districs.php", function( data ) {
//   $.each( data, function(key, distric ) {
//       $('#districs').append("<option value='"+distric.steate_id+"'>"+distric.district_name+"</option>")
//     })
// })

