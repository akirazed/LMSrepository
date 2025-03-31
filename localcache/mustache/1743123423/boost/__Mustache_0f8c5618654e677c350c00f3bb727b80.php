<?php

class __Mustache_0f8c5618654e677c350c00f3bb727b80 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('messages');
        $buffer .= $this->sectionFb8e8ddc9ca3702110812af7d06781d6($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<form id="agreedocsform" method="post" action="';
        $value = $this->resolveValue($context->find('myurl'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
        $value = $this->resolveValue($context->find('sesskey'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '
';
        $value = $context->find('behalfuser');
        $buffer .= $this->sectionD4ec3e22f3b0ae9329842c5c3784573e($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="clearfix">
';
        $buffer .= $indent . '    <div class="float-start">
';
        $buffer .= $indent . '        <h2>';
        $value = $context->find('str');
        $buffer .= $this->section5bb4b2abc119c477619f475c5edc3c76($context, $indent, $value);
        $buffer .= '</h2>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="clearfix mt-2">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->sectionD815d68342d7b53d3e0366d387c3134a($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '<hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '
';
        $value = $context->find('policies');
        $buffer .= $this->section1f15e4ac5f0abb3723a50e21d71a2ddc($context, $indent, $value);
        $buffer .= $indent . '
';
        $value = $context->find('str');
        $buffer .= $this->section0310656597a1964b7d417c1e7984fbb3($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '<hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '<input type="submit" class="btn btn-primary" name="submit" value="';
        $value = $context->find('cleanstr');
        $buffer .= $this->section29fb893f48d62bed7458857abdf574eb($context, $indent, $value);
        $buffer .= '">
';
        $value = $context->find('cancancel');
        $buffer .= $this->sectionA412ba171dfcb81c1a19625ae2dc11f5($context, $indent, $value);
        $buffer .= $indent . '</form>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->sectionCea902a5784746d3909ecd143dbd7436($context, $indent, $value);

        return $buffer;
    }

    private function sectionFb8e8ddc9ca3702110812af7d06781d6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '{{{.}}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= $indent . ($value === null ? '' : $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2b03adb6b37db42162cb6b61475f966f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' viewconsentpageforuser, tool_policy, {{{ . }}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' viewconsentpageforuser, tool_policy, ';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD4ec3e22f3b0ae9329842c5c3784573e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<div class="clearfix">
    <div class="float-end mb-2">
        {{# str }} viewconsentpageforuser, tool_policy, {{{ . }}} {{/ str }}
    </div>
</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<div class="clearfix">
';
                $buffer .= $indent . '    <div class="float-end mb-2">
';
                $buffer .= $indent . '        ';
                $value = $context->find('str');
                $buffer .= $this->section2b03adb6b37db42162cb6b61475f966f($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bb4b2abc119c477619f475c5edc3c76(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'consentpagetitle, tool_policy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'consentpagetitle, tool_policy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD815d68342d7b53d3e0366d387c3134a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'agreepolicies, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'agreepolicies, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2185a19d2f3e95432a0f07d19c3b6f4c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'refertofullpolicytext, tool_policy, {{{policymodal}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'refertofullpolicytext, tool_policy, ';
                $value = $this->resolveValue($context->find('policymodal'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBa62695a49f9a4492031521af49af2a0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'checked="{{.}}"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'checked="';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4cfc621bdd4c8b871018b112b88685f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'iagree, tool_policy, {{{name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'iagree, tool_policy, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section65d9e387f8a2a341bd08710f1d2f54b1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'idontagree, tool_policy, {{{name}}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'idontagree, tool_policy, ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD6c1ca79cc8d9ea71f2bd2555d32c1c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="agreedoc-radios">
                <div class="agreedoc-radios-1">
                    <label>
                        <input type="radio" name="status{{id}}" value="1" {{#versionagreed}}checked="{{.}}"{{/versionagreed}}>
                        {{# str }}iagree, tool_policy, {{{name}}} {{/ str }}
                    </label>
                </div>
                <div class="agreedoc-radios-0">
                    <label>
                        <input type="radio" name="status{{id}}" value="0" {{#versiondeclined}}checked="{{.}}"{{/versiondeclined}}>
                        {{# str }}idontagree, tool_policy, {{{name}}} {{/ str }}
                    </label>
                </div>
            </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="agreedoc-radios">
';
                $buffer .= $indent . '                <div class="agreedoc-radios-1">
';
                $buffer .= $indent . '                    <label>
';
                $buffer .= $indent . '                        <input type="radio" name="status';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="1" ';
                $value = $context->find('versionagreed');
                $buffer .= $this->sectionBa62695a49f9a4492031521af49af2a0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section4cfc621bdd4c8b871018b112b88685f5($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="agreedoc-radios-0">
';
                $buffer .= $indent . '                    <label>
';
                $buffer .= $indent . '                        <input type="radio" name="status';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" value="0" ';
                $value = $context->find('versiondeclined');
                $buffer .= $this->sectionBa62695a49f9a4492031521af49af2a0($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        ';
                $value = $context->find('str');
                $buffer .= $this->section65d9e387f8a2a341bd08710f1d2f54b1($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </label>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD40d693fe85c90f8373977602361b75f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' required ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' required ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section425f9487998c3fff66bd42194e674fae(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <li><small>{{{.}}}</small></li>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <li><small>';
                $value = $this->resolveValue($context->last(), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</small></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1f15e4ac5f0abb3723a50e21d71a2ddc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '

<input value="{{id}}" name="listdoc[]" type="hidden">

<div class="agreedoc-policy clearfix mt-2 mb-1">
    <h3>{{{name}}}</h3>
    <div class="agreedoc-content">
        <div class="agreedoc-summary mb-2">
          {{{summary}}}
        </div>
        <div class="agreedoc-msg">
            {{# str }}refertofullpolicytext, tool_policy, {{{policymodal}}} {{/ str }}
        </div>
        <div class="agreedoc-form mt-1">
            {{#optional}}
            <div class="agreedoc-radios">
                <div class="agreedoc-radios-1">
                    <label>
                        <input type="radio" name="status{{id}}" value="1" {{#versionagreed}}checked="{{.}}"{{/versionagreed}}>
                        {{# str }}iagree, tool_policy, {{{name}}} {{/ str }}
                    </label>
                </div>
                <div class="agreedoc-radios-0">
                    <label>
                        <input type="radio" name="status{{id}}" value="0" {{#versiondeclined}}checked="{{.}}"{{/versiondeclined}}>
                        {{# str }}idontagree, tool_policy, {{{name}}} {{/ str }}
                    </label>
                </div>
            </div>
            {{/optional}}
            {{^optional}}
            <div class="agreedoc-checkbox">
                <label>
                    <input value="1" name="status{{id}}" {{#versionagreed}}checked="{{.}}"{{/versionagreed}} type="checkbox">
                    {{# str }}iagree, tool_policy, {{{name}}} {{/ str }}
                    <i class="icon fa fa-exclamation-circle text-danger fa-fw" title="{{# str }} required {{/ str }}" ></i>
                </label>
            </div>
            <ul class="agreedoc-msg list-unstyled">
                    {{#versionlangsagreed}}
                        <li><small>{{{.}}}</small></li>
                    {{/versionlangsagreed}}
                    {{#versionbehalfsagreed}}
                        <li><small>{{{.}}}</small></li>
                    {{/versionbehalfsagreed}}
            </ul>
            {{/optional}}
        </div>
    </div>
</div>

';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '
';
                $buffer .= $indent . '<input value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="listdoc[]" type="hidden">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '<div class="agreedoc-policy clearfix mt-2 mb-1">
';
                $buffer .= $indent . '    <h3>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>
';
                $buffer .= $indent . '    <div class="agreedoc-content">
';
                $buffer .= $indent . '        <div class="agreedoc-summary mb-2">
';
                $buffer .= $indent . '          ';
                $value = $this->resolveValue($context->find('summary'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="agreedoc-msg">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section2185a19d2f3e95432a0f07d19c3b6f4c($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <div class="agreedoc-form mt-1">
';
                $value = $context->find('optional');
                $buffer .= $this->sectionD6c1ca79cc8d9ea71f2bd2555d32c1c1($context, $indent, $value);
                $value = $context->find('optional');
                if (empty($value)) {
                    
                    $buffer .= $indent . '            <div class="agreedoc-checkbox">
';
                    $buffer .= $indent . '                <label>
';
                    $buffer .= $indent . '                    <input value="1" name="status';
                    $value = $this->resolveValue($context->find('id'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" ';
                    $value = $context->find('versionagreed');
                    $buffer .= $this->sectionBa62695a49f9a4492031521af49af2a0($context, $indent, $value);
                    $buffer .= ' type="checkbox">
';
                    $buffer .= $indent . '                    ';
                    $value = $context->find('str');
                    $buffer .= $this->section4cfc621bdd4c8b871018b112b88685f5($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                    <i class="icon fa fa-exclamation-circle text-danger fa-fw" title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionD40d693fe85c90f8373977602361b75f($context, $indent, $value);
                    $buffer .= '" ></i>
';
                    $buffer .= $indent . '                </label>
';
                    $buffer .= $indent . '            </div>
';
                    $buffer .= $indent . '            <ul class="agreedoc-msg list-unstyled">
';
                    $value = $context->find('versionlangsagreed');
                    $buffer .= $this->section425f9487998c3fff66bd42194e674fae($context, $indent, $value);
                    $value = $context->find('versionbehalfsagreed');
                    $buffer .= $this->section425f9487998c3fff66bd42194e674fae($context, $indent, $value);
                    $buffer .= $indent . '            </ul>
';
                }
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '</div>
';
                $buffer .= $indent . '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0310656597a1964b7d417c1e7984fbb3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'somefieldsrequired, form, <i class="icon fa fa-exclamation-circle text-danger fa-fw" title="{{# str }} required {{/ str }}" ></i>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'somefieldsrequired, form, <i class="icon fa fa-exclamation-circle text-danger fa-fw" title="';
                $value = $context->find('str');
                $buffer .= $this->sectionD40d693fe85c90f8373977602361b75f($context, $indent, $value);
                $buffer .= '" ></i>';
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

    private function section48889b9f3f273ba8c7c463afc8a04b66(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' cancel ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' cancel ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA412ba171dfcb81c1a19625ae2dc11f5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<input type="submit" class="btn btn-secondary" name="cancel" value="{{#cleanstr}} cancel {{/cleanstr}}">
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<input type="submit" class="btn btn-secondary" name="cancel" value="';
                $value = $context->find('cleanstr');
                $buffer .= $this->section48889b9f3f273ba8c7c463afc8a04b66($context, $indent, $value);
                $buffer .= '">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCea902a5784746d3909ecd143dbd7436(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
// Initialise the JS for the modal window which displays the policy versions.
require([\'tool_policy/policyactions\'], function(ActionsMod) {
    ActionsMod.init(\'[data-action="view"]\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '// Initialise the JS for the modal window which displays the policy versions.
';
                $buffer .= $indent . 'require([\'tool_policy/policyactions\'], function(ActionsMod) {
';
                $buffer .= $indent . '    ActionsMod.init(\'[data-action="view"]\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
