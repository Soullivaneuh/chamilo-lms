<?php
/* For licensing terms, see /license.txt */

/**
 * Interface VirtualMachineInterface
 */
interface VirtualMachineInterface
{
    /**
     * @return mixed
     */
    public function connect();

    /**
     * @return mixed
     */
    public function runCron();

    /**
     * @return mixed
     */
    public function resizeToMaxLimit();

    /**
     * @return mixed
     */
    public function resizeToMinLimit();
}
