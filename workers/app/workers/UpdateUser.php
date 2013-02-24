<?php

class UpdateUser {

    public function fire($job, $payload) {
        $user = User::find($payload['user_id']);
        $user->slowProcess();
        $job->delete();
    }

}

/// more use cases
/// - send emails
/// - image manip
/// - breaking apis
/// - upload to s3

/// fault tolerance

/**
 * Benefits over cron
 * xample of bg jobs vs cron
 * race conditions
 * ops component
 * workers on different servers / scaling
 *
 * i18n (expensive servers in other contries)
 * multiple workers
 * Spliting against servers
 * queue-ec2-01.seatgeek.com
 * Batching requests
 *
 */
