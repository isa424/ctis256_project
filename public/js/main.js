$('.like-button').click(function(e) {
  e.preventDefault();
  const id = parseInt($(this).attr('id')) + 1;

  $.post(window.url + '/api/posts/like', {
    post: id,
    user: window.user_id,
  }).then(function(data) {
    console.log(data);
  }).catch(function(err) {
    console.error(err);
  });

//   $.post(window.url + '/api/posts/unlike', {
//     post: id,
//     user: window.user_id,
//   }).then(function(data) {
//     console.log(data);
//   }).catch(function(err) {
//     console.error(err);
//   });
});

$('.delete-post').click(function(e) {
    e.preventDefault();

    $.post();
});

