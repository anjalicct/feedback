<?php 

use Contact\Feedback\FeedbackController;


Route::get('contactus', function(){
    echo "contactus form";
});

Route::get('feedback', [FeedbackController::class, 'index']);
Route::post('submitform', [FeedbackController::class, 'submit'])->name('feedback.submit');

?>