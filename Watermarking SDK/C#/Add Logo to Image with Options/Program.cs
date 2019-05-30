//*******************************************************************************************//
//                                                                                           //
// Download Free Evaluation Version From: https://bytescout.com/download/web-installer       //
//                                                                                           //
// Also available as Web API! Get Your Free API Key: https://app.pdf.co/signup               //
//                                                                                           //
// Copyright © 2017-2019 ByteScout, Inc. All rights reserved.                                //
// https://www.bytescout.com                                                                 //
// https://pdf.co                                                                            //
//                                                                                           //
//*******************************************************************************************//


using System;
using System.Diagnostics;
using System.Drawing;
using System.Collections.Generic;
using Bytescout.Watermarking;
using Bytescout.Watermarking.Presets;

namespace Sample
{
    class Program
    {
        static void Main(string[] args)
        {
            // Create Watermarker instance
            Watermarker waterMarker = new Watermarker();

            // Initialize library
            waterMarker.InitLibrary("demo", "demo");

            // Set input file name
            string inputFilePath = "my_sample_image.jpg";
            // Set output file title
            string outputFilePath = "my_sample_output.jpg";

            // Add image to apply watermarks to
            waterMarker.AddInputFile(inputFilePath, outputFilePath);

            // Create new watermark
            LogoImage preset = new LogoImage();

            // Select image file
            preset.ImageFile = "mylogo.png";

            // Set text transparency
            preset.Transparency = 40;

            // Set watermark placement
            preset.Placement = WatermarkPlacement.MiddleCenter;

            // Set scale
            preset.Scale = 2.0f;

            // Add watermark to watermarker
            waterMarker.AddWatermark(preset);

            // Set output directory
            waterMarker.OutputOptions.OutputDirectory = ".";

            // Set output format
            waterMarker.OutputOptions.ImageFormat = OutputFormats.JPEG;

            // Apply watermarks
            waterMarker.Execute();

            // open generated image file in default image viewer installed in Windows
            Process.Start(outputFilePath);
        }
    }
}