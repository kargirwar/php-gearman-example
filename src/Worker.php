<?php
namespace GearmanTest;

class Worker {
    private $mWorker;
    function __construct() {
        # Create our worker object.
        $this->mWorker = new \GearmanWorker();

        # Add default server (localhost).
        $this->mWorker->addServer();

        $this->mWorker->addFunction(Client::JOB_TYPE_REPORT, [$this, "report"]);
    }

    public function run() {
        while($this->mWorker->work()) {
            if ($this->mWorker->returnCode() != GEARMAN_SUCCESS) {
                throw new \Exception("Fatal Error");
            }
        }
    }

    public function report($job) {
        //simulate long running task
        sleep(1);
        echo "\nYay!Sent the report to " . $job->workload() . "\n";
    }
}
?>
