<?php

/**
 * Created by IntelliJ IDEA.
 * User: set.rs
 * Date: 24-Apr-17
 * Time: 12:34 PM
 */
abstract class OperatorExpression extends Expression
{
    protected $l_op;
    protected $r_op;

    /**
     * OperatorExpression constructor.
     * @param $l_op
     * @param $r_op
     */
    public function __construct(Expression $l_op, Expression $r_op)
    {
        $this->l_op = $l_op;
        $this->r_op = $r_op;
    }


    function interpret(InterpreterContex $context)
    {
        $this->l_op->interpret($context);
        $this->r_op->interpret($context);
        $result_l = $context->lookup($this->l_op);
        $result_r = $context->lookup($this->r_op);
        $this->doInterpret($context, $result_l, $result_r);
    }

    abstract protected function doInterpret(
        InterpreterContex $context,
        $result_l,
        $result_r
    );

}