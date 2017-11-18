<?php
namespace GearmanTest;
class Client {
    private $mClient;
    const JOB_TYPE_REPORT = "job-type-report";

    function __construct() {
        # create our client object
        $this->mClient = new \GearmanClient();

        # add the default server (localhost)
        $this->mClient->addServer();
    }

    public function run(string $user) {
        $this->mClient->doBackground(self::JOB_TYPE_REPORT, $user);

        if ($this->mClient->returnCode() != GEARMAN_SUCCESS) {
            throw new \Exception("Fatal Error");
        }
    }
}
