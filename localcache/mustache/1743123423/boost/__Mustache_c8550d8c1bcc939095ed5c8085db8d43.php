<?php

class __Mustache_c8550d8c1bcc939095ed5c8085db8d43 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<h2>';
        $value = $this->resolveValue($context->find('title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</h2>
';
        $value = $context->find('backurl');
        $buffer .= $this->sectionCf443b6a091ab55f3b5a3012c9e53087($context, $indent, $value);
        $value = $context->find('canaddnew');
        $buffer .= $this->section4816dee30e69c477b30b99220068e36c($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '<table id="tool-policy-managedocs-wrapper" class="generaltable fullwidth listpolicydocuments">
';
        $buffer .= $indent . '    <thead>
';
        $buffer .= $indent . '        <tr>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section4c3224cc44eea28645a6fefa8e032595($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section00efecd52b65c0eb2bfbe89710fb7716($context, $indent, $value);
        $buffer .= '</th>
';
        $buffer .= $indent . '            <th scope="col">';
        $value = $context->find('str');
        $buffer .= $this->section2748824270900c98578cba74ba1658ee($context, $indent, $value);
        $buffer .= '</th>
';
        $value = $context->find('canviewacceptances');
        $buffer .= $this->section407540deb086e5eaf3ed5c979170d6a9($context, $indent, $value);
        $value = $context->find('canmanage');
        $buffer .= $this->section4a56b8724e3e5996f0a349f46286f8f7($context, $indent, $value);
        $buffer .= $indent . '        </tr>
';
        $buffer .= $indent . '    </thead>
';
        $buffer .= $indent . '    <tbody>
';
        $value = $context->find('versions');
        $buffer .= $this->sectionE75b4511323e9156c5a0b5e78ccb3acc($context, $indent, $value);
        $buffer .= $indent . '    </tbody>
';
        $buffer .= $indent . '</table>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section2d5d257478a9d895640c0598d2993637($context, $indent, $value);

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

    private function sectionCf443b6a091ab55f3b5a3012c9e53087(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div class="btn-group">
            <a href="{{backurl}}" class="btn btn-secondary">{{#str}} back {{/str}}</a>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <div class="btn-group">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('backurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-secondary">';
                $value = $context->find('str');
                $buffer .= $this->sectionEe9e446c9436ef6762b83feef2c4ca70($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2217f840e11dd0b788435ad54e61348e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' newpolicy, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' newpolicy, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4816dee30e69c477b30b99220068e36c(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div>
        <div class="btn-group">
            <a href="{{pluginbaseurl}}/editpolicydoc.php" class="btn btn-primary">{{#str}} newpolicy, tool_policy {{/str}}</a>
        </div>
    </div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div>
';
                $buffer .= $indent . '        <div class="btn-group">
';
                $buffer .= $indent . '            <a href="';
                $value = $this->resolveValue($context->find('pluginbaseurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '/editpolicydoc.php" class="btn btn-primary">';
                $value = $context->find('str');
                $buffer .= $this->section2217f840e11dd0b788435ad54e61348e($context, $indent, $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
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

    private function section00efecd52b65c0eb2bfbe89710fb7716(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' status, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' status, tool_policy ';
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

    private function section79a1263767d83df6885ffeeb42c5937f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' usersaccepted, tool_policy ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' usersaccepted, tool_policy ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section407540deb086e5eaf3ed5c979170d6a9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <th scope="col">{{#str}} usersaccepted, tool_policy {{/str}}</th>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <th scope="col">';
                $value = $context->find('str');
                $buffer .= $this->section79a1263767d83df6885ffeeb42c5937f($context, $indent, $value);
                $buffer .= '</th>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4a56b8724e3e5996f0a349f46286f8f7(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <th scope="col"></th>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <th scope="col"></th>
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

    private function sectionB66721b1e000234d7b3add9251222af9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div style="float:left">
                    {{#pix}} level, tool_policy {{/pix}}
                </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div style="float:left">
';
                $buffer .= $indent . '                    ';
                $value = $context->find('pix');
                $buffer .= $this->section353531b444a74fd48c74ae91f71d0be0($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB22d032f5c3889a475fa73f1ab4e4bf5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="margin-left: 24px" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="margin-left: 24px" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section82489e7a910f2900891a2419e15f275d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' lastmodified, core ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' lastmodified, core ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section57e9f5548297c1925b0e952993e02171(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timemodified}}, %Y-%m-%dT%T%z ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', %Y-%m-%dT%T%z ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section75622a8d47eadce6c55c0686cf838fc5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' strftimedatetime, core_langconfig ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' strftimedatetime, core_langconfig ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section13dd706a2d1616cbaf24b2be79924a16(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{timemodified}}, {{#str}} strftimedatetime, core_langconfig {{/str}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('timemodified'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $context->find('str');
                $buffer .= $this->section75622a8d47eadce6c55c0686cf838fc5($context, $indent, $value);
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2e7dcefd979f47281cfdf0c2f7b0a40(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <a href="{{acceptancescounturl}}">{{acceptancescounttext}}</a>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('acceptancescounturl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $this->resolveValue($context->find('acceptancescounttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6ae4c86af62de7bcb2431331871ced3d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td>
                {{#acceptancescounturl}}
                    <a href="{{acceptancescounturl}}">{{acceptancescounttext}}</a>
                {{/acceptancescounturl}}
                {{^acceptancescounturl}}
                    {{acceptancescounttext}}
                {{/acceptancescounturl}}
            </td>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <td>
';
                $value = $context->find('acceptancescounturl');
                $buffer .= $this->sectionA2e7dcefd979f47281cfdf0c2f7b0a40($context, $indent, $value);
                $value = $context->find('acceptancescounturl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $this->resolveValue($context->find('acceptancescounttext'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '
';
                }
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section68b40a7dcf25959e972e075298bd5bd5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{>core/action_menu}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                if ($partial = $this->mustache->loadPartial('core/action_menu')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1a2d8b605a69ea9ebc5bcfcdc25e2b71(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <td>
                {{#actionmenu}}
                {{>core/action_menu}}
                {{/actionmenu}}
            </td>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <td>
';
                $value = $context->find('actionmenu');
                $buffer .= $this->section68b40a7dcf25959e972e075298bd5bd5($context, $indent, $value);
                $buffer .= $indent . '            </td>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE75b4511323e9156c5a0b5e78ccb3acc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <tr data-policy-name="{{{name}}}" data-policy-revision="{{revision}}">
            <td>
                {{#indented}}
                <div style="float:left">
                    {{#pix}} level, tool_policy {{/pix}}
                </div>
                {{/indented}}
                <div {{#indented}}style="margin-left: 24px" {{/indented}}>
                    <div>{{{name}}}</div>
                    <div class="text-muted, muted"><small>{{{typetext}}}, {{{audiencetext}}}, {{{optionaltext}}}</small></div>
                </div>
            </td>
            <td>
                {{{statustext}}}
            </td>
            <td>
                {{revision}}
                <div class="text-muted, muted">
                    <small>
                        <time title="{{#str}} lastmodified, core {{/str}}" datetime="{{#userdate}} {{timemodified}}, %Y-%m-%dT%T%z {{/userdate}}">
                            {{#userdate}} {{timemodified}}, {{#str}} strftimedatetime, core_langconfig {{/str}} {{/userdate}}
                        </time>
                    </small>
                </div>
            </td>
            {{#canviewacceptances}}
            <td>
                {{#acceptancescounturl}}
                    <a href="{{acceptancescounturl}}">{{acceptancescounttext}}</a>
                {{/acceptancescounturl}}
                {{^acceptancescounturl}}
                    {{acceptancescounttext}}
                {{/acceptancescounturl}}
            </td>
            {{/canviewacceptances}}
            {{#canmanage}}
            <td>
                {{#actionmenu}}
                {{>core/action_menu}}
                {{/actionmenu}}
            </td>
            {{/canmanage}}
        </tr>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <tr data-policy-name="';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" data-policy-revision="';
                $value = $this->resolveValue($context->find('revision'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '            <td>
';
                $value = $context->find('indented');
                $buffer .= $this->sectionB66721b1e000234d7b3add9251222af9($context, $indent, $value);
                $buffer .= $indent . '                <div ';
                $value = $context->find('indented');
                $buffer .= $this->sectionB22d032f5c3889a475fa73f1ab4e4bf5($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                    <div>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '                    <div class="text-muted, muted"><small>';
                $value = $this->resolveValue($context->find('typetext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('audiencetext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('optionaltext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</small></div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('statustext'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </td>
';
                $buffer .= $indent . '            <td>
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('revision'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                <div class="text-muted, muted">
';
                $buffer .= $indent . '                    <small>
';
                $buffer .= $indent . '                        <time title="';
                $value = $context->find('str');
                $buffer .= $this->section82489e7a910f2900891a2419e15f275d($context, $indent, $value);
                $buffer .= '" datetime="';
                $value = $context->find('userdate');
                $buffer .= $this->section57e9f5548297c1925b0e952993e02171($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('userdate');
                $buffer .= $this->section13dd706a2d1616cbaf24b2be79924a16($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </time>
';
                $buffer .= $indent . '                    </small>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </td>
';
                $value = $context->find('canviewacceptances');
                $buffer .= $this->section6ae4c86af62de7bcb2431331871ced3d($context, $indent, $value);
                $value = $context->find('canmanage');
                $buffer .= $this->section1a2d8b605a69ea9ebc5bcfcdc25e2b71($context, $indent, $value);
                $buffer .= $indent . '        </tr>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section2d5d257478a9d895640c0598d2993637(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'tool_policy/managedocsactions\'], function(ManageDocsActions) {
    ManageDocsActions.init(\'tool-policy-managedocs-wrapper\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'tool_policy/managedocsactions\'], function(ManageDocsActions) {
';
                $buffer .= $indent . '    ManageDocsActions.init(\'tool-policy-managedocs-wrapper\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
