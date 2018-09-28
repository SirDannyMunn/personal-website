<?php

namespace Deployer;

task('run:build', '
    yarn;
    npm run prod;
');
