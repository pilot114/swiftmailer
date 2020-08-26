<?php

Swift_DependencyContainer::getInstance()
    ->register('message.message')
    ->asNewInstanceOf(\Swift_Message::class)

    ->register('message.mimepart')
    ->asNewInstanceOf(\Swift_MimePart::class)
;
