<?php


use App\Models\Job;
use App\Models\Employer;

it('it belongs to an Employer', function () {
    // expect(true)->toBeTrue();
    // AA
    //Arrange
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //Act
    // $job->employer;
    //Assets

    expect($job->employer->is($employer))->toBeTrue();
});


it('can have tags', function () {
    $job = Job::factory()->create();
    $job->tag("Frontend");

    expect($job->tags)->toHaveCount(1);
});
