<?php

use Go\Aop\Aspect;
use Go\Lang\Annotation\Before;
use Go\Aop\Intercept\MethodInvocation;

class Hackathon_Blackfireio_Aspect_Isenabled
    implements Aspect
{

    /**
     * Intercept all public methods for Mage_Cms_Block_Page.
     *
     * @param MethodInvocation $invocation Invocation
     * @Before("execution(public *_Block_*->*(*))")
     */
    public function beforeMethodExecution(MethodInvocation $invocation)
    {
        $obj = $invocation->getThis();
        echo 'Calling Before Interceptor for method: ',
        $invocation->getMethod()->getName(),
        ' with arguments: ',
        json_encode($invocation->getArguments());
    }

}