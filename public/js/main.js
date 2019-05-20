$(document).ready(function() {
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

  $('.make-comment').click(function(e) {
    e.preventDefault();
    const id = $(this).attr('id');
    const text = $('#comment-' + id)[0].value;

    $.post('/ctis256_project/public/api/comments', {
      post: id,
      text: text,
      user: window.user_id,
    }).then(function(data) {
      const comment = $("<article class = 'reply' id='" + data.id + "'><div class = 'info'>Replied by: " + data.username + " just now</div><p>" + text +"</p></article>");
      $('article#post-' + id).append(comment);
     }).catch(function(err) {
        console.error(err);
    });
  });
});