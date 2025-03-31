<?php

class __Mustache_20e6d3bf8e04b9b24991bdb944a7011e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<form method="post" action="';
        $value = $this->resolveValue($context->find('action'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="mb-1" role="search">
';
        $buffer .= $indent . '    <label for="unified-filters" class="sr-only">';
        $value = $context->find('str');
        $buffer .= $this->section1f2fd5701c14a5c38a31c866ad1b7bb0($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '    <select name="unified-filters[]" id="unified-filters" multiple="multiple" data-originaloptionsjson="';
        $value = $this->resolveValue($context->find('originaloptionsjson'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" class="form-autocomplete-original-select">
';
        $value = $context->find('filteroptions');
        $buffer .= $this->section0bfe2f75dc6b92dc689bdccc99b533e9($context, $indent, $value);
        $buffer .= $indent . '    </select>
';
        $buffer .= $indent . '    <input type="hidden" name="unified-filter-submitted" value="1">
';
        $buffer .= $indent . '</form>
';
        $value = $context->find('js');
        $buffer .= $this->section731ff385ab9b0e4ddf9975c60023972d($context, $indent, $value);

        return $buffer;
    }

    private function section1f2fd5701c14a5c38a31c866ad1b7bb0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'filters , tool_policy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'filters , tool_policy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC877874b20aed109ed5be9bdc0ef9c49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'selected="selected"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'selected="selected"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section0bfe2f75dc6b92dc689bdccc99b533e9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <option value="{{value}}" {{#selected}}selected="selected"{{/selected}}>{{{label}}}</option>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <option value="';
                $value = $this->resolveValue($context->find('value'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" ';
                $value = $context->find('selected');
                $buffer .= $this->sectionC877874b20aed109ed5be9bdc0ef9c49($context, $indent, $value);
                $buffer .= '>';
                $value = $this->resolveValue($context->find('label'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</option>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section731ff385ab9b0e4ddf9975c60023972d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'tool_policy/acceptances_filter\'], function(Filter) {
        Filter.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'tool_policy/acceptances_filter\'], function(Filter) {
';
                $buffer .= $indent . '        Filter.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
