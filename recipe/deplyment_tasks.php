<?php

namespace Deployer;

task('build', '
    yarn;
    npm run prod;
');
