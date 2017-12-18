<?php

namespace BountyLib;


class TasksStatuses
{
    const NEW_TASK = 0;
    const PENDING_RERVIEW = 1;
    const CONFIRMED = 2;
    const FAILED = 3;
    const NEED_REWORK = 4;
    const PENDING_PAYMENT = 5;
    const COMPLETED = 6;
    const CANCELED_BY_ADMIN = 7;
    const CANCELED_BY_USER = 8;
    const EXPIRED = 9;
}