<?php

class __Mustache_e4865d3311eafc3e3843b360a5ec589c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('haspolicies');
        $buffer .= $this->section30f5ceacf88b05039448108c714ea4ab($context, $indent, $value);

        return $buffer;
    }

    private function sectionC8ab4ec4b8e9323e88dee69817fc0bf0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' acceptancepolicies, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' acceptancepolicies, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section450fd3995b8cf183ce079ba8703c617b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' guestconsentmessage, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' guestconsentmessage, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0ae3501ccb6c69482d9f0047013ce325(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '&amp;returnurl={{.}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '&amp;returnurl=';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBabb0198bb778beead271a2e83e09fc1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li>
                        <a href="{{pluginbaseurl}}/view.php?versionid={{id}}{{#returnurl}}&amp;returnurl={{.}}{{/returnurl}}" {{!
                            }}data-action="view-guest" data-versionid="{{id}}" data-behalfid="1">
                            {{{name}}}
                        </a>
                    </li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li>
';
                $buffer .= $indent . '                        <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/view.php?versionid=';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $value = $context->find('returnurl');
                $buffer .= $this->section0ae3501ccb6c69482d9f0047013ce325($context, $indent, $value);
                $buffer .= '" ';
                $buffer .= 'data-action="view-guest" data-versionid="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-behalfid="1">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </a>
';
                $buffer .= $indent . '                    </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section135bb0f329a8bd8199e0b9035aeeebe5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' guestconsent:continue, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' guestconsent:continue, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAb8e69f49d0f2f6e567073a92d309647(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\', \'tool_policy/jquery-eu-cookie-law-popup\', \'tool_policy/policyactions\'], function($, Popup, ActionsMod) {
            // Initialise the guest popup.
            $(document).ready(function() {
                // Initialize popup.
                $(document.body).addClass(\'eupopup\');
                if ($(".eupopup").length > 0) {
                    $(document).euCookieLawPopup().init();
                }

                // Initialise the JS for the modal window which displays the policy versions.
                ActionsMod.init(\'[data-action="view-guest"]\');
            });
        });
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        require([\'jquery\', \'tool_policy/jquery-eu-cookie-law-popup\', \'tool_policy/policyactions\'], function($, Popup, ActionsMod) {
';
                $buffer .= $indent . '            // Initialise the guest popup.
';
                $buffer .= $indent . '            $(document).ready(function() {
';
                $buffer .= $indent . '                // Initialize popup.
';
                $buffer .= $indent . '                $(document.body).addClass(\'eupopup\');
';
                $buffer .= $indent . '                if ($(".eupopup").length > 0) {
';
                $buffer .= $indent . '                    $(document).euCookieLawPopup().init();
';
                $buffer .= $indent . '                }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                // Initialise the JS for the modal window which displays the policy versions.
';
                $buffer .= $indent . '                ActionsMod.init(\'[data-action="view-guest"]\');
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30f5ceacf88b05039448108c714ea4ab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{! Only show message if there is some policy related to guests. }}
    <div {{!
        }}class="eupopup eupopup-container eupopup-container-block eupopup-container-bottom eupopup-block eupopup-style-compact" {{!
        }}role="dialog" {{!
        }}aria-label="{{# str }} acceptancepolicies, tool_policy {{/str}}"{{!
    }}>
    </div>
    <div class="eupopup-markup d-none">
        <div class="eupopup-head"></div>
        <div class="eupopup-body">
            {{# str }} guestconsentmessage, tool_policy {{/ str }}
            <ul>
                {{#policies}}
                    <li>
                        <a href="{{pluginbaseurl}}/view.php?versionid={{id}}{{#returnurl}}&amp;returnurl={{.}}{{/returnurl}}" {{!
                            }}data-action="view-guest" data-versionid="{{id}}" data-behalfid="1">
                            {{{name}}}
                        </a>
                    </li>
                {{/policies}}
            </ul>
        </div>
        <div class="eupopup-buttons">
            <a href="#" class="eupopup-button eupopup-button_1">{{# str }} guestconsent:continue, tool_policy {{/ str }}</a>
        </div>
        <div class="clearfix"></div>
        <a href="#" class="eupopup-closebutton">x</a>
    </div>

    {{#js}}
        require([\'jquery\', \'tool_policy/jquery-eu-cookie-law-popup\', \'tool_policy/policyactions\'], function($, Popup, ActionsMod) {
            // Initialise the guest popup.
            $(document).ready(function() {
                // Initialize popup.
                $(document.body).addClass(\'eupopup\');
                if ($(".eupopup").length > 0) {
                    $(document).euCookieLawPopup().init();
                }

                // Initialise the JS for the modal window which displays the policy versions.
                ActionsMod.init(\'[data-action="view-guest"]\');
            });
        });
    {{/js}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div ';
                $buffer .= 'class="eupopup eupopup-container eupopup-container-block eupopup-container-bottom eupopup-block eupopup-style-compact" ';
                $buffer .= 'role="dialog" ';
                $buffer .= 'aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionC8ab4ec4b8e9323e88dee69817fc0bf0($context, $indent, $value);
                $buffer .= '"';
                $buffer .= '>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    <div class="eupopup-markup d-none">
';
                $buffer .= $indent . '        <div class="eupopup-head"></div>
';
                $buffer .= $indent . '        <div class="eupopup-body">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section450fd3995b8cf183ce079ba8703c617b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '            <ul>
';
                $value = $context->find('policies');
                $buffer .= $this->sectionBabb0198bb778beead271a2e83e09fc1($context, $indent, $value);
                $buffer .= $indent . '            </ul>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="eupopup-buttons">
';
                $buffer .= $indent . '            <a href="#" class="eupopup-button eupopup-button_1">';
                $value = $context->find('str');
                $buffer .= $this->section135bb0f329a8bd8199e0b9035aeeebe5($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="clearfix"></div>
';
                $buffer .= $indent . '        <a href="#" class="eupopup-closebutton">x</a>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $value = $context->find('js');
                $buffer .= $this->sectionAb8e69f49d0f2f6e567073a92d309647($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
