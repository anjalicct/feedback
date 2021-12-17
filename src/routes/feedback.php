<?php 

use Anjalicct\Feedback\FeedbackController;

Route::get('feedback', [FeedbackController::class, 'index']);
Route::post('submitform', [FeedbackController::class, 'submit'])->name('feedback.submit');

?>