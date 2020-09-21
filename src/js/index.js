import 'scss/style.scss';

console.log('module.hot', module.hot);
if (module.hot) {
	module.hot.accept('scss/style.scss', function() {
		console.log('Update styles');
	});
}
var movie = "Fight club";
var description = "Терзаемый хронической бессонницей и отчаянно пытающийся вырваться из мучительно скучной жизни, клерк встречает некоего Тайлера Дардена, харизматического торговца мылом с извращенной философией.";
// alert(one);
console.log(movie);
// document.getElementById('test').innerHTML = one;

$('#movie').text(movie);
$('#movie').fadeOut("slow");

$('#description').text(description);
$('#description').fadeOut("slow");


// document.getElementsByClassName("myclass")[0].innerHTML = one

