<?php

class __Mustache_6cff89c447a5a7770abf572d82bfb494 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<span class="tool_policy-user_agreement-icon">';
        $value = $context->find('pix');
        $buffer .= $this->sectionC317aedc70ee42aeffee17cdb205ed6a($context, $indent, $value);
        $buffer .= '</span>
';
        $buffer .= $indent . '<span class="tool_policy-user_agreement-status">';
        $value = $this->resolveValue($context->find('statustext'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</span>
';
        $buffer .= $indent . '<span class="tool_policy-user_agreement-actions">
';
        $value = $context->find('actions');
        $buffer .= $this->sectionE5e321af8c56b479bab42b1be47f1348($context, $indent, $value);
        $buffer .= $indent . '</span>
';

        return $buffer;
    }

    private function sectionC317aedc70ee42aeffee17cdb205ed6a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{statusicon}}, tool_policy';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('statusicon'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', tool_policy';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE5e321af8c56b479bab42b1be47f1348(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <a href="{{url}}" title="{{title}}" data-action="{{data}}"><small>{{text}}</small></a>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-action="';
                $value = $this->resolveValue($context->find('data'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"><small>';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</small></a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
