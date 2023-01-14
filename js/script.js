$(document).ready(function(){
  var select = $('<select>').attr('id', 'countries')
  select.append($('<option>').text('Select country').val(''))
   $.get( "http://dev7.pro/gitSelect/api/countries.php", function( countries ) {
   $.each( countries, function( key, country ) {
    select.append($('<option>').text(country.country_name).val(country.id))
    })
    $('#app').append(select)
  })
})
$(document).on( 'change', '#countries', function(){
  var select = $('<select>').attr('id', 'states')
  select.append($('<option>').text('Select state').val(''))
   $.get( "http://dev7.pro/gitSelect/api/states.php?country_id="+ $(this).val(), function( states ) {
   $.each( states, function( key, state ) {
    select.append($('<option>').text(state.state_name).val(state.state_id))
    })
    $('#states').remove()
    $('#app').append(select)
  })
})
$(document).on( 'change', '#states', function(){
  var select = $('<select>').attr('id', 'district')
  select.append($('<option>').text('Select state').val(''))
   $.get( "http://dev7.pro/gitSelect/api/district.php?steate_id=" + $(this).val(), function( district ) {
   $.each( district, function( key, distric ) {
    select.append($('<option>').text(distric.district_name).val(distric.district_id))
    })
    $('#district').remove()
    $('#app').append(select)
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
// $.get( "http://dev7.pro/gitSelect/api/district.php", function( data ) {
//   $.each( data, function(key, distric ) {
//       $('#districs').append("<option value='"+distric.steate_id+"'>"+distric.district_name+"</option>")
//     })
// })

