<?php

class __Mustache_ad2ff14818b2547c6004dbeac90bb881 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<a id="top"></a>
';
        $buffer .= $indent . '<div class="clearfix">
';
        $buffer .= $indent . '    <div class="float-start">
';
        $buffer .= $indent . '        <h2>';
        $value = $this->resolveValue($context->findDot('policy.name'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    </div>
';
        $value = $context->find('numpolicy');
        $buffer .= $this->section57fb67b606afdeb7ed278614f1fecf5b($context, $indent, $value);
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('numpolicy');
        $buffer .= $this->section2ebbfddf42dcc96bb2cefff34ea0e662($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="policy_document mt-1">
';
        $buffer .= $indent . '    <div class="policy_document_summary clearfix mb-1">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('policy.summary'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '    <div class="policy_document_content mt-2">
';
        $buffer .= $indent . '        ';
        $value = $this->resolveValue($context->findDot('policy.content'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="policy_buttons">
';
        $value = $context->find('returnurl');
        $buffer .= $this->section8f072256c17c9d55e7064dcc05113a57($context, $indent, $value);
        $value = $context->find('editurl');
        $buffer .= $this->sectionA1cc07e0832e373cd65a9c41dc4ea3a6($context, $indent, $value);
        $value = $context->find('accepturl');
        $buffer .= $this->section644f48abd510f8ff49899e948face99d($context, $indent, $value);
        $value = $context->find('declineurl');
        $buffer .= $this->sectionDb1566d343a7fc74f210d49dfd8116bf($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <div class="float-end">
';
        $buffer .= $indent . '        <a href="#top">
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section6cfcc69c8f4924573538362182814b9f($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '            <i class="icon text-primary fa fa-caret-up" title="';
        $value = $context->find('str');
        $buffer .= $this->section6cfcc69c8f4924573538362182814b9f($context, $indent, $value);
        $buffer .= '" ></i>
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section2fa2919f2deabcc2b49fae8ff7178df0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{numpolicy}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('numpolicy'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3a7917509ae4486c38bcb6107df40fd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{totalpolicies}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->find('totalpolicies'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD937dad427875046d69a11c16ec43077(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' steppolicies, tool_policy,
                { "numpolicy": {{# quote }}{{numpolicy}}{{/quote }}, "totalpolicies": {{# quote }}{{totalpolicies}}{{/ quote }} }
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' steppolicies, tool_policy,
';
                $buffer .= $indent . '                { "numpolicy": ';
                $value = $context->find('quote');
                $buffer .= $this->section2fa2919f2deabcc2b49fae8ff7178df0($context, $indent, $value);
                $buffer .= ', "totalpolicies": ';
                $value = $context->find('quote');
                $buffer .= $this->sectionA3a7917509ae4486c38bcb6107df40fd($context, $indent, $value);
                $buffer .= ' }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57fb67b606afdeb7ed278614f1fecf5b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="float-end">
            {{# str }} steppolicies, tool_policy,
                { "numpolicy": {{# quote }}{{numpolicy}}{{/quote }}, "totalpolicies": {{# quote }}{{totalpolicies}}{{/ quote }} }
            {{/ str }}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="float-end">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionD937dad427875046d69a11c16ec43077($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68703e76f7a1cf884d664e88383ab614(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'readpolicy, tool_policy, {{{policy.name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'readpolicy, tool_policy, ';
                $value = $this->resolveValue($context->findDot('policy.name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2ebbfddf42dcc96bb2cefff34ea0e662(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="clearfix mt-2">
        <h3>{{# str }}readpolicy, tool_policy, {{{policy.name}}} {{/ str }}</h3>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="clearfix mt-2">
';
                $buffer .= $indent . '        <h3>';
                $value = $context->find('str');
                $buffer .= $this->section68703e76f7a1cf884d664e88383ab614($context, $indent, $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section29fb893f48d62bed7458857abdf574eb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' next ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' next ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section191daa671a660cfad9fbdb3ea3e39def(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <a role="button" href="{{returnurl}}" class="btn btn-primary">{{#str}} next {{/str}}</a>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <a role="button" href="';
                $value = $this->resolveValue($context->find('returnurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary">';
                $value = $context->find('str');
                $buffer .= $this->section29fb893f48d62bed7458857abdf574eb($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEe9e446c9436ef6762b83feef2c4ca70(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' back ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' back ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8f072256c17c9d55e7064dcc05113a57(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{# numpolicy }}
            <a role="button" href="{{returnurl}}" class="btn btn-primary">{{#str}} next {{/str}}</a>
        {{/ numpolicy }}
        {{^ numpolicy }}
            <a role="button" href="{{returnurl}}" class="btn btn-primary">{{#str}} back {{/str}}</a>
        {{/ numpolicy }}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('numpolicy');
                $buffer .= $this->section191daa671a660cfad9fbdb3ea3e39def($context, $indent, $value);
                $value = $context->find('numpolicy');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <a role="button" href="';
                    $value = $this->resolveValue($context->find('returnurl'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" class="btn btn-primary">';
                    $value = $context->find('str');
                    $buffer .= $this->sectionEe9e446c9436ef6762b83feef2c4ca70($context, $indent, $value);
                    $buffer .= '</a>
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9a58bd3b46eea9f9784c07a37fbde3e5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' edit ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' edit ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA1cc07e0832e373cd65a9c41dc4ea3a6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a role="button" href="{{editurl}}" class="btn">{{#str}} edit {{/str}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a role="button" href="';
                $value = $this->resolveValue($context->find('editurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn">';
                $value = $context->find('str');
                $buffer .= $this->section9a58bd3b46eea9f9784c07a37fbde3e5($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEf6c24df7599849582ee2f7c3c1ceab5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' iagree, tool_policy, {{{policy.name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' iagree, tool_policy, ';
                $value = $this->resolveValue($context->findDot('policy.name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section644f48abd510f8ff49899e948face99d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a role="button" href="{{accepturl}}" class="btn btn-primary">{{#str}} iagree, tool_policy, {{{policy.name}}} {{/str}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a role="button" href="';
                $value = $this->resolveValue($context->find('accepturl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary">';
                $value = $context->find('str');
                $buffer .= $this->sectionEf6c24df7599849582ee2f7c3c1ceab5($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAa85f8ef4d5afa8c57057aca7e564717(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' idontagree, tool_policy, {{{policy.name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' idontagree, tool_policy, ';
                $value = $this->resolveValue($context->findDot('policy.name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDb1566d343a7fc74f210d49dfd8116bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <a role="button" href="{{declineurl}}" class="btn btn-link">{{#str}} idontagree, tool_policy, {{{policy.name}}} {{/str}}</a>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <a role="button" href="';
                $value = $this->resolveValue($context->find('declineurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-link">';
                $value = $context->find('str');
                $buffer .= $this->sectionAa85f8ef4d5afa8c57057aca7e564717($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6cfcc69c8f4924573538362182814b9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' backtotop, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' backtotop, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
