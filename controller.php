<?php

    public function store(Request $request) {
        $request->validate([
            'career_position' => 'required',
            'r_time' => 'nullable',
            'place' => 'required',
            'r_content' => 'required'
        ]);

        $storeResume = new Resume();

        $storeResume->career_position = implode('|',$request->career_position);
        $storeResume->r_time = implode('|',$request->r_time);
        $storeResume->place = implode('|',$request->place);
        $storeResume->r_content = implode('|',$request->r_content);

        $storeResume->save();

        return redirect()->route('resume.index')->with('success', 'Resume Content Saved Successfully :)');
    }