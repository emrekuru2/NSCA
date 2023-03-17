<?php

namespace App\Libraries;

class Contents
{
    public function accordion($content)
    {
        return view('components/accordion', $content);
    }

    public function editor()
    {
        return view('components/editor');
    }

    public function comment($content)
    {
        return view('components/comment', $content);
    }

    public function groupEditListPanel($content)
    {
        return view('components/groupEditListPanel', $content);
    }

    public function searchPanel($content)
    {
        return view('components/searchPanel', $content);
    }

    public function groupMemberEditList($content)
    {
        return view('components/groupMemberEditList', $content);
    }
}
