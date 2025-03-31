<?php

class __Mustache_db890f2b19720b7cbf66c8ba5a321ddd extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('canrevoke');
        if (empty($value)) {
            
            $buffer .= $indent . '    <div class="alert alert-info">';
            $value = $context->find('str');
            $buffer .= $this->section592e4c9da551b64b584d2b39772b04b2($context, $indent, $value);
            $buffer .= '</div>
';
        }
        $buffer .= $indent . '
';
        $buffer .= $indent . '<table class="generaltable fullwidth">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '    <tr>
';
        $buffer .= $indent . '        <th>';
        $value = $context->find('str');
        $buffer .= $this->section4c3224cc44eea28645a6fefa8e032595($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th>';
        $value = $context->find('str');
        $buffer .= $this->section2748824270900c98578cba74ba1658ee($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th>';
        $value = $context->find('str');
        $buffer .= $this->section455be06271fecdc47b40d05e13d725a5($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '        <th>';
        $value = $context->find('str');
        $buffer .= $this->sectionB763b2d388373eb7bd44aff48943dddd($context, $indent, $value);
        $buffer .= '</th>
';
        $value = $context->find('hasonbehalfagreements');
        $buffer .= $this->section1d114c253a0fb8d3596ae8f80cca5201($context, $indent, $value);
        $buffer .= $indent . '        <th></th>
';
        $buffer .= $indent . '    </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('policies');
        $buffer .= $this->section647931702135049440b795d62a906929($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $value = $context->find('returnurl');
        $buffer .= $this->section30e3a806f4575cab2674b0f0fd42b760($context, $indent, $value);
        $value = $context->find('js');
        $buffer .= $this->sectionB5fe03d063e30e4def49c221d963170d($context, $indent, $value);

        return $buffer;
    }

    private function section592e4c9da551b64b584d2b39772b04b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' contactdpo, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' contactdpo, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4c3224cc44eea28645a6fefa8e032595(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' policydocname, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' policydocname, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2748824270900c98578cba74ba1658ee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' policydocrevision, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' policydocrevision, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section455be06271fecdc47b40d05e13d725a5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' response, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' response, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB763b2d388373eb7bd44aff48943dddd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' responseon, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' responseon, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2fa88b2780b9757e6d623171e20841c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' responseby, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' responseby, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA941ea4370b6b4321762fc1e70574980(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' acceptancenote, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' acceptancenote, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1d114c253a0fb8d3596ae8f80cca5201(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <th>{{#str}} responseby, tool_policy {{/str}}</th>
        <th>{{#str}} acceptancenote, tool_policy {{/str}}</th>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <th>';
                $value = $context->find('str');
                $buffer .= $this->section2fa88b2780b9757e6d623171e20841c2($context, $indent, $value);
                $buffer .= '</th>
';
                $buffer .= $indent . '        <th>';
                $value = $context->find('str');
                $buffer .= $this->sectionA941ea4370b6b4321762fc1e70574980($context, $indent, $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section353531b444a74fd48c74ae91f71d0be0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' level, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' level, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section44b447c08306f70a9fa3673c20f3a98b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' status1, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' status1, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEb3fb9b3c4b5ca1450d98efb95bf3a49(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="badge bg-success text-white">{{#str}} status1, tool_policy {{/str}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="badge bg-success text-white">';
                $value = $context->find('str');
                $buffer .= $this->section44b447c08306f70a9fa3673c20f3a98b($context, $indent, $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionCe3040c9fb9929378844485abc6bab6c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' policydocoptionalyes, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' policydocoptionalyes, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section110edffe58ab4ec20df54b66d7f089fc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<span class="badge bg-info text-white">{{#str}} policydocoptionalyes, tool_policy {{/str}}</span>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<span class="badge bg-info text-white">';
                $value = $context->find('str');
                $buffer .= $this->sectionCe3040c9fb9929378844485abc6bab6c($context, $indent, $value);
                $buffer .= '</span>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6f73865adf67372e2c3424b854b5a455(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <td>{{{acceptedby}}}</td>
                        <td>{{{note}}}</td>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('acceptedby'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('note'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section30c7c0cd4b99b6da629471b76b36126a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'detailedless, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'detailedless, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section883580daa75603d9881e319154e3dd3f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/less, moodle, {{#str}}detailedless, moodle{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/less, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section30c7c0cd4b99b6da629471b76b36126a($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06f01c9b7dad75c73114c484ec59ee05(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'detailedmore, moodle';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'detailedmore, moodle';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9d02edbbef011e8c261b9191026b689e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 't/more, moodle, {{#str}}detailedmore, moodle{{/str}}';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 't/more, moodle, ';
                $value = $context->find('str');
                $buffer .= $this->section06f01c9b7dad75c73114c484ec59ee05($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section06dd2eac9ce76e317bc395b218bad142(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a class="showarchived" data-target=".archived{{policyid}}" data-status="hidden" href="#">
                                <div class="toggleoff" style="display:none">{{#pix}}t/less, moodle, {{#str}}detailedless, moodle{{/str}}{{/pix}}</div>
                                <div class="toggleon">{{#pix}}t/more, moodle, {{#str}}detailedmore, moodle{{/str}}{{/pix}}</div>
                            </a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a class="showarchived" data-target=".archived';
                $value = $this->resolveValue($context->find('policyid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" data-status="hidden" href="#">
';
                $buffer .= $indent . '                                <div class="toggleoff" style="display:none">';
                $value = $context->find('pix');
                $buffer .= $this->section883580daa75603d9881e319154e3dd3f($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                                <div class="toggleon">';
                $value = $context->find('pix');
                $buffer .= $this->section9d02edbbef011e8c261b9191026b689e($context, $indent, $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                            </a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB974dcfe474417fab5e51b629347c252(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <tr {{^isfirst}}class="archived{{policyid}}" style="display:none"{{/isfirst}}>
                        <td>
                            {{^isfirst}}
                                <div style="float:left">
                                    {{#pix}} level, tool_policy {{/pix}}
                                </div>
                            {{/isfirst}}
                            <div {{^isfirst}}style="margin-left: 24px" {{/isfirst}}>
                                <div><a href="{{viewurl}}">{{{name}}}</a></div>
                            </div>
                        </td>
                        <td>
                            <a href="{{viewurl}}">{{{revision}}}</a>
                            {{#iscurrent}}<span class="badge bg-success text-white">{{#str}} status1, tool_policy {{/str}}</span>{{/iscurrent}}
                            {{#isoptional}}<span class="badge bg-info text-white">{{#str}} policydocoptionalyes, tool_policy {{/str}}</span>{{/isoptional}}
                        </td>
                        <td>
                            {{>tool_policy/user_agreement}}
                        </td>
                        <td>{{timeaccepted}}</td>
                        {{#hasonbehalfagreements}}
                        <td>{{{acceptedby}}}</td>
                        <td>{{{note}}}</td>
                        {{/hasonbehalfagreements}}
                        <td>
                            {{#hasarchived}}<a class="showarchived" data-target=".archived{{policyid}}" data-status="hidden" href="#">
                                <div class="toggleoff" style="display:none">{{#pix}}t/less, moodle, {{#str}}detailedless, moodle{{/str}}{{/pix}}</div>
                                <div class="toggleon">{{#pix}}t/more, moodle, {{#str}}detailedmore, moodle{{/str}}{{/pix}}</div>
                            </a>{{/hasarchived}}
                        </td>
                    </tr>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <tr ';
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= 'class="archived';
                    $value = $this->resolveValue($context->find('policyid'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '" style="display:none"';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                        <td>
';
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                                <div style="float:left">
';
                    $buffer .= $indent . '                                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->section353531b444a74fd48c74ae91f71d0be0($context, $indent, $value);
                    $buffer .= '
';
                    $buffer .= $indent . '                                </div>
';
                }
                $buffer .= $indent . '                            <div ';
                $value = $context->find('isfirst');
                if (empty($value)) {
                    
                    $buffer .= 'style="margin-left: 24px" ';
                }
                $buffer .= '>
';
                $buffer .= $indent . '                                <div><a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></div>
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td>
';
                $buffer .= $indent . '                            <a href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('revision'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('iscurrent');
                $buffer .= $this->sectionEb3fb9b3c4b5ca1450d98efb95bf3a49($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('isoptional');
                $buffer .= $this->section110edffe58ab4ec20df54b66d7f089fc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td>
';
                if ($partial = $this->mustache->loadPartial('tool_policy/user_agreement')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                            ');
                }
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                        <td>';
                $value = $this->resolveValue($context->find('timeaccepted'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</td>
';
                $value = $context->find('hasonbehalfagreements');
                $buffer .= $this->section6f73865adf67372e2c3424b854b5a455($context, $indent, $value);
                $buffer .= $indent . '                        <td>
';
                $buffer .= $indent . '                            ';
                $value = $context->find('hasarchived');
                $buffer .= $this->section06dd2eac9ce76e317bc395b218bad142($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </td>
';
                $buffer .= $indent . '                    </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section52d3170a14d4687de92396198ac3ec0e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#agreement}}
                    <tr {{^isfirst}}class="archived{{policyid}}" style="display:none"{{/isfirst}}>
                        <td>
                            {{^isfirst}}
                                <div style="float:left">
                                    {{#pix}} level, tool_policy {{/pix}}
                                </div>
                            {{/isfirst}}
                            <div {{^isfirst}}style="margin-left: 24px" {{/isfirst}}>
                                <div><a href="{{viewurl}}">{{{name}}}</a></div>
                            </div>
                        </td>
                        <td>
                            <a href="{{viewurl}}">{{{revision}}}</a>
                            {{#iscurrent}}<span class="badge bg-success text-white">{{#str}} status1, tool_policy {{/str}}</span>{{/iscurrent}}
                            {{#isoptional}}<span class="badge bg-info text-white">{{#str}} policydocoptionalyes, tool_policy {{/str}}</span>{{/isoptional}}
                        </td>
                        <td>
                            {{>tool_policy/user_agreement}}
                        </td>
                        <td>{{timeaccepted}}</td>
                        {{#hasonbehalfagreements}}
                        <td>{{{acceptedby}}}</td>
                        <td>{{{note}}}</td>
                        {{/hasonbehalfagreements}}
                        <td>
                            {{#hasarchived}}<a class="showarchived" data-target=".archived{{policyid}}" data-status="hidden" href="#">
                                <div class="toggleoff" style="display:none">{{#pix}}t/less, moodle, {{#str}}detailedless, moodle{{/str}}{{/pix}}</div>
                                <div class="toggleon">{{#pix}}t/more, moodle, {{#str}}detailedmore, moodle{{/str}}{{/pix}}</div>
                            </a>{{/hasarchived}}
                        </td>
                    </tr>
                {{/agreement}}
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('agreement');
                $buffer .= $this->sectionB974dcfe474417fab5e51b629347c252($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section647931702135049440b795d62a906929(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            {{#versions}}
                {{#agreement}}
                    <tr {{^isfirst}}class="archived{{policyid}}" style="display:none"{{/isfirst}}>
                        <td>
                            {{^isfirst}}
                                <div style="float:left">
                                    {{#pix}} level, tool_policy {{/pix}}
                                </div>
                            {{/isfirst}}
                            <div {{^isfirst}}style="margin-left: 24px" {{/isfirst}}>
                                <div><a href="{{viewurl}}">{{{name}}}</a></div>
                            </div>
                        </td>
                        <td>
                            <a href="{{viewurl}}">{{{revision}}}</a>
                            {{#iscurrent}}<span class="badge bg-success text-white">{{#str}} status1, tool_policy {{/str}}</span>{{/iscurrent}}
                            {{#isoptional}}<span class="badge bg-info text-white">{{#str}} policydocoptionalyes, tool_policy {{/str}}</span>{{/isoptional}}
                        </td>
                        <td>
                            {{>tool_policy/user_agreement}}
                        </td>
                        <td>{{timeaccepted}}</td>
                        {{#hasonbehalfagreements}}
                        <td>{{{acceptedby}}}</td>
                        <td>{{{note}}}</td>
                        {{/hasonbehalfagreements}}
                        <td>
                            {{#hasarchived}}<a class="showarchived" data-target=".archived{{policyid}}" data-status="hidden" href="#">
                                <div class="toggleoff" style="display:none">{{#pix}}t/less, moodle, {{#str}}detailedless, moodle{{/str}}{{/pix}}</div>
                                <div class="toggleon">{{#pix}}t/more, moodle, {{#str}}detailedmore, moodle{{/str}}{{/pix}}</div>
                            </a>{{/hasarchived}}
                        </td>
                    </tr>
                {{/agreement}}
            {{/versions}}
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('versions');
                $buffer .= $this->section52d3170a14d4687de92396198ac3ec0e($context, $indent, $value);
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

    private function section30e3a806f4575cab2674b0f0fd42b760(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div><a role="button" href="{{returnurl}}" class="btn btn-primary">{{#str}} back {{/str}}</a></div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div><a role="button" href="';
                $value = $this->resolveValue($context->find('returnurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-primary">';
                $value = $context->find('str');
                $buffer .= $this->sectionEe9e446c9436ef6762b83feef2c4ca70($context, $indent, $value);
                $buffer .= '</a></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5fe03d063e30e4def49c221d963170d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'jquery\'], function($) {
        $(\'body\').on(\'click\', \'.showarchived\', function(e) {
            e.preventDefault();
            var target = $(this).attr(\'data-target\'),
                status = $(this).attr(\'data-status\');
            if (status === \'hidden\') {
                $(target).show();
                $(this).attr(\'data-status\', \'shown\');
                $(this).find(\'.toggleoff\').show();
                $(this).find(\'.toggleon\').hide();
            } else {
                $(target).hide();
                $(this).attr(\'data-status\', \'hidden\');
                $(this).find(\'.toggleon\').show();
                $(this).find(\'.toggleoff\').hide();
            }
        });
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'jquery\'], function($) {
';
                $buffer .= $indent . '        $(\'body\').on(\'click\', \'.showarchived\', function(e) {
';
                $buffer .= $indent . '            e.preventDefault();
';
                $buffer .= $indent . '            var target = $(this).attr(\'data-target\'),
';
                $buffer .= $indent . '                status = $(this).attr(\'data-status\');
';
                $buffer .= $indent . '            if (status === \'hidden\') {
';
                $buffer .= $indent . '                $(target).show();
';
                $buffer .= $indent . '                $(this).attr(\'data-status\', \'shown\');
';
                $buffer .= $indent . '                $(this).find(\'.toggleoff\').show();
';
                $buffer .= $indent . '                $(this).find(\'.toggleon\').hide();
';
                $buffer .= $indent . '            } else {
';
                $buffer .= $indent . '                $(target).hide();
';
                $buffer .= $indent . '                $(this).attr(\'data-status\', \'hidden\');
';
                $buffer .= $indent . '                $(this).find(\'.toggleon\').show();
';
                $buffer .= $indent . '                $(this).find(\'.toggleoff\').hide();
';
                $buffer .= $indent . '            }
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
