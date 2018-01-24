<?php

namespace BountyLib;


class TasksHistoryTypes
{
    const CREATE_TASK = 0;
    const SEND_CONFIRMATION = 1;
    const APPROVE_TASK = 2;
    const REJECT_TASK = 3;
    const SEND_TASK_MESSAGE = 4;
    const COMPLETED = 5;
    const CANCELED_BY_ADMIN = 6;
    const CANCELED_BY_USER = 7;
}